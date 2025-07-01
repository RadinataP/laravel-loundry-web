<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->with('service')->latest()->get();

        // Dummy promo sementara
        $promos = [
            (object)[
                'title' => 'Diskon 20% Cuci Komplit!',
                'description' => 'Dapatkan diskon spesial untuk layanan cuci komplit selama bulan ini.'
            ],
            (object)[
                'title' => 'Gratis Antar Jemput!',
                'description' => 'Gratis layanan antar jemput untuk transaksi minimal Rp 50.000.'
            ],
            (object)[
                'title' => 'Cuci 5 Gratis 1',
                'description' => 'Kumpulkan 5 order, gratis 1 layanan cuci kiloan.'
            ],
        ];

        return view('user.dashboard', compact('orders', 'promos'));
    }
}
