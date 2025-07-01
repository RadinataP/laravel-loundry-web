@extends('layouts.app')

@section('content')
<div class="p-6 space-y-6">
  <h1 class="text-3xl font-bold text-blue-800">Edit Layanan</h1>

  <form action="{{ route('admin.services.update', $service->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')
    <div>
      <label class="block mb-1 font-medium">Nama:</label>
      <input type="text" name="name" value="{{ $service->name }}" required class="border p-2 w-full rounded focus:ring focus:ring-blue-200">
    </div>
    <div>
      <label class="block mb-1 font-medium">Harga (Rp):</label>
      <input type="number" name="price" value="{{ $service->price }}" required class="border p-2 w-full rounded focus:ring focus:ring-blue-200">
    </div>
    <div>
      <label class="block mb-1 font-medium">Deskripsi:</label>
      <textarea name="description" required class="border p-2 w-full rounded focus:ring focus:ring-blue-200">{{ $service->description }}</textarea>
    </div>
    <div class="flex space-x-2">
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Update</button>
      <a href="{{ route('admin.services.index') }}" class="text-gray-600 hover:underline">Batal</a>
    </div>
  </form>
</div>
@endsection
