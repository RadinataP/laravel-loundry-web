@extends('layouts.app')

@section('content')
<div class="p-6 space-y-6">
  <div class="flex justify-between items-center">
    <h1 class="text-3xl font-bold text-blue-800">Data Layanan</h1>
    <a href="{{ route('admin.services.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">+ Tambah Layanan</a>
  </div>

  <table class="w-full bg-white rounded-xl shadow overflow-hidden">
    <thead class="bg-blue-100 text-blue-800">
      <tr>
        <th class="p-3 text-left">Nama</th>
        <th class="p-3 text-left">Harga</th>
        <th class="p-3 text-left">Deskripsi</th>
        <th class="p-3 text-left">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($services as $service)
      <tr class="border-b hover:bg-blue-50">
        <td class="p-3">{{ $service->name }}</td>
        <td class="p-3">Rp{{ number_format($service->price, 0, ',', '.') }}</td>
        <td class="p-3">{{ $service->description }}</td>
        <td class="p-3 space-x-2">
          <a href="{{ route('admin.services.edit', $service->id) }}" class="text-blue-600 hover:underline">Edit</a>
          <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin hapus layanan ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
