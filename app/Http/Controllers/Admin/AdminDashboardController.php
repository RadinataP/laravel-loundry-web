<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $totalOrder = Order::count();
        $totalLayanan = Service::count();

        $orders = Order::with('user', 'service')->latest()->take(5)->get();

        // Ambil data chart order 7 hari terakhir
        $orderChartData = Order::select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('count(*) as total')
            )
            ->whereDate('created_at', '>=', Carbon::now()->subDays(6))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        // Siapkan array label dan data
        $labels = [];
        $data = [];

        // Generate tanggal 7 hari ke belakang
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $labels[] = $date;
            $found = $orderChartData->firstWhere('date', $date);
            $data[] = $found ? $found->total : 0;
        }

        return view('admin.dashboard', compact(
            'totalUser',
            'totalOrder',
            'totalLayanan',
            'orders',
            'labels',
            'data'
        ));
    }
}
