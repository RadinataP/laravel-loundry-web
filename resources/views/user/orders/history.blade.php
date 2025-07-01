@extends('layouts.app')

@section('content')
<div class="p-6">
  <h1 class="text-2xl font-bold mb-4">Riwayat Order</h1>

  <table class="w-full bg-white rounded shadow overflow-hidden">
    <thead class="bg-blue-100 text-blue-800">
      <tr>
        <th class="p-3">Layanan</th>
        <th class="p-3">Qty</th>
        <th class="p-3">Total</th>
        <th class="p-3">Status</th>
        <th class="p-3">Alamat</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($orders as $order)
      <tr class="border-b">
        <td class="p-3">{{ $order->service->name }}</td>
        <td class="p-3">{{ $order->quantity }} Kg</td>
        <td class="p-3">Rp {{ number_format($order->total_price) }}</td>
        <td class="p-3">{{ $order->status }}</td>
        <td class="p-3">{{ $order->address }}</td>
      </tr>
      @empty
      <tr>
        <td colspan="5" class="p-4 text-center text-gray-500">Belum ada order.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
