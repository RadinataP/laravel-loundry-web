@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Data Order</h1>

    <table class="w-full bg-white rounded shadow">
        <thead class="bg-blue-100 text-blue-800">
            <tr>
                <th class="p-3 text-left">Nama User</th>
                <th class="p-3 text-left">Layanan</th>
                <th class="p-3 text-left">Status</th>
                <th class="p-3 text-left">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr class="border-b hover:bg-blue-50">
                    <td class="p-3">{{ $order->user->name }}</td>
                    <td class="p-3">{{ $order->service->name }}</td>
                    <td class="p-3">{{ $order->status }}</td>
                    <td class="p-3">{{ $order->created_at->format('d M Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="p-3 text-center text-gray-500">Belum ada order</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
