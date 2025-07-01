@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Order</h1>

    <form action="{{ route('admin.orders.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label>Nama Pelanggan:</label>
            <select name="user_id" class="border p-2 w-full">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label>Layanan:</label>
            <select name="service_id" class="border p-2 w-full" id="serviceSelect">
                @foreach ($services as $service)
                    <option value="{{ $service->id }}" data-price="{{ $service->price }}">{{ $service->name }} (Rp {{ number_format($service->price) }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label>Alamat:</label>
            <input type="text" name="address" class="border p-2 w-full">
        </div>

        <div class="mb-4">
            <label>Jumlah (Kg):</label>
            <input type="number" name="quantity" id="quantityInput" value="1" min="1" class="border p-2 w-full">
        </div>

        <div class="mb-4">
            <label>Total Harga:</label>
            <input type="text" id="totalPrice" class="border p-2 w-full bg-gray-100" readonly>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('admin.orders.index') }}" class="text-gray-600 ml-2">Kembali</a>
    </form>
</div>

<script>
    const serviceSelect = document.getElementById('serviceSelect');
    const quantityInput = document.getElementById('quantityInput');
    const totalPrice = document.getElementById('totalPrice');

    function updateTotal() {
        const selectedOption = serviceSelect.options[serviceSelect.selectedIndex];
        const price = selectedOption.getAttribute('data-price');
        const qty = quantityInput.value;
        totalPrice.value = 'Rp ' + (price * qty).toLocaleString();
    }

    serviceSelect.addEventListener('change', updateTotal);
    quantityInput.addEventListener('input', updateTotal);
    document.addEventListener('DOMContentLoaded', updateTotal);
</script>
@endsection
