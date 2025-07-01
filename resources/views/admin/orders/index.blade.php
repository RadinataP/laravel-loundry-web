@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Data Order Laundry</h1>

    <table class="w-full bg-white rounded shadow overflow-hidden">
        <thead class="bg-blue-100 text-blue-800">
            <tr>
                <th class="p-3">Nama</th>
                <th class="p-3">Layanan</th>
                <th class="p-3">Alamat</th>
                <th class="p-3">Qty</th>
                <th class="p-3">Total</th>
                <th class="p-3">Status</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr class="border-b">
                <td class="p-3">{{ $order->user->name }}</td>
                <td class="p-3">{{ $order->service->name }}</td>
                <td class="p-3">{{ $order->address }}</td>
                <td class="p-3">{{ $order->quantity }} Kg</td>
                <td class="p-3">Rp {{ number_format($order->total_price) }}</td>
                <td class="p-3">{{ $order->status }}</td>
                <td class="p-3 flex gap-2">
                    <a href="{{ route('admin.orders.edit', $order) }}" class="text-blue-600">Ubah Status</a>
                    <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" onsubmit="return confirm('Hapus order ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
