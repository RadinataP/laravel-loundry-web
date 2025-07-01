@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen p-6">

  <div class="bg-white/80 backdrop-blur-sm shadow-xl rounded-2xl p-8 max-w-lg w-full">
    <h1 class="text-3xl font-bold mb-6 text-blue-700 text-center">Order Laundry</h1>

    <form action="{{ route('user.orders.store') }}" method="POST">
      @csrf

      <div class="mb-4">
        <label class="block font-medium mb-1">Layanan</label>
        <select name="service_id" class="border border-gray-300 p-3 w-full rounded focus:ring-2 focus:ring-blue-400" required>
          <option value="">Pilih Layanan</option>
          @foreach ($services as $service)
          <option value="{{ $service->id }}">{{ $service->name }} - Rp {{ number_format($service->price) }}/kg</option>
          @endforeach
        </select>
      </div>

      <div class="mb-4">
        <label class="block font-medium mb-1">Jumlah Laundry (Kg)</label>
        <input type="number" name="quantity" class="border border-gray-300 p-3 w-full rounded focus:ring-2 focus:ring-blue-400" min="1" required>
      </div>

      <div class="mb-4">
        <label class="block font-medium mb-1">Alamat</label>
        <textarea name="address" class="border border-gray-300 p-3 w-full rounded focus:ring-2 focus:ring-blue-400" required></textarea>
      </div>

      <div class="flex items-center justify-between mt-6">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg shadow">Pesan Sekarang</button>
        <a href="/user/dashboard" class="text-gray-600 hover:text-gray-800">Kembali</a>
      </div>

    </form>
  </div>

</div>
@endsection
