@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Ubah Status Order</h1>

    <div class="mb-4">
        <strong>Nama:</strong> {{ $order->user->name }}<br>
        <strong>Layanan:</strong> {{ $order->service->name }}<br>
        <strong>Qty:</strong> {{ $order->quantity }} Kg<br>
        <strong>Total:</strong> Rp {{ number_format($order->total_price) }}
    </div>

    <form action="{{ route('admin.orders.update', $order) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label>Status:</label>
            <select name="status" class="border p-2 w-full">
                <option {{ $order->status === 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                <option {{ $order->status === 'Diproses' ? 'selected' : '' }}>Diproses</option>
                <option {{ $order->status === 'Selesai' ? 'selected' : '' }}>Selesai</option>
                <option {{ $order->status === 'Batal' ? 'selected' : '' }}>Batal</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('admin.orders.index') }}" class="text-gray-600 ml-2">Kembali</a>
    </form>
</div>
@endsection
