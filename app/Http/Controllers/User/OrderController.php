<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        $services = Service::all();
        return view('user.orders.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'quantity' => 'required|integer|min:1',
            'address' => 'required|string|max:255',
        ]);

        $service = Service::find($request->service_id);
        $total_price = $service->price * $request->quantity;

        Order::create([
            'user_id' => Auth::id(),
            'service_id' => $request->service_id,
            'quantity' => $request->quantity,
            'address' => $request->address,
            'total_price' => $total_price,
            'status' => 'Menunggu'
        ]);

        return redirect()->route('user.orders.history')->with('success', 'Order berhasil dibuat!');
    }

    public function history()
    {
        $orders = Order::where('user_id', Auth::id())->with('service')->latest()->get();
        return view('user.orders.history', compact('orders'));
    }
}
