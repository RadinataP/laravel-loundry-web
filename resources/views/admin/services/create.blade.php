@extends('layouts.app')

@section('content')
<div class="p-6 space-y-6">
  <h1 class="text-3xl font-bold text-blue-800">Tambah Layanan</h1>

  <form action="{{ route('admin.services.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
      <label class="block mb-1 font-medium">Nama:</label>
      <input type="text" name="name" required class="border p-2 w-full rounded focus:ring focus:ring-blue-200">
    </div>
    <div>
      <label class="block mb-1 font-medium">Harga (Rp):</label>
      <input type="number" name="price" required class="border p-2 w-full rounded focus:ring focus:ring-blue-200">
    </div>
    <div>
      <label class="block mb-1 font-medium">Deskripsi:</label>
      <textarea name="description" required class="border p-2 w-full rounded focus:ring focus:ring-blue-200"></textarea>
    </div>
    <div class="flex space-x-2">
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Simpan</button>
      <a href="{{ route('admin.services.index') }}" class="text-gray-600 hover:underline">Kembali</a>
    </div>
  </form>
</div>
@endsection
