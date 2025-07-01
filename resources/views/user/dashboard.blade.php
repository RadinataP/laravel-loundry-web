@extends('layouts.app')

@section('content')
<div class="relative overflow-hidden">
  {{-- Bubble Background --}}
  <div class="absolute inset-0 -z-10">
    <div class="absolute w-52 h-52 bg-blue-200 rounded-full opacity-30 blur-3xl animate-ping left-0 top-0"></div>
    <div class="absolute w-64 h-64 bg-blue-300 rounded-full opacity-20 blur-3xl animate-pulse right-10 bottom-10"></div>
  </div>

  <div class="p-6 space-y-8">

    <h1 class="text-4xl font-bold text-blue-800">Dashboard Kamu</h1>

    {{-- Info User --}}
    <div class="p-5 bg-white rounded-xl shadow flex justify-between items-center">
      <div>
        <h2 class="text-2xl font-bold text-blue-700 mb-1">Hi, {{ Auth::user()->name }}!</h2>
        <p class="text-gray-600">Status: <span class="font-semibold">{{ Auth::user()->role }}</span></p>
      </div>
      <a href="{{ route('user.orders.create') }}"
         class="px-5 py-2 bg-blue-400 text-white rounded-full shadow hover:bg-blue-500 transition font-semibold text-sm">
        Order Laundry
      </a>
    </div>

    {{-- Riwayat Order --}}
    <div>
      <h2 class="text-2xl font-semibold text-blue-800 mb-4">Order Terakhir</h2>
      <table class="w-full bg-white rounded-xl shadow overflow-hidden">
        <thead class="bg-blue-100 text-blue-800">
          <tr>
            <th class="p-3 text-left">Layanan</th>
            <th class="p-3 text-left">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
            <tr class="border-b hover:bg-blue-50">
              <td class="p-3">{{ $order->service->name }}</td>
              <td class="p-3">{{ $order->status }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    {{-- Promo Antar Jemput --}}
    <div>
      <h2 class="text-2xl font-semibold text-blue-800 mb-4">Promo Antar Jemput 🚚</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($promos as $promo)
          @if (Str::contains(strtolower($promo->title), 'antar jemput'))
            <div class="p-4 bg-white rounded-lg shadow hover:scale-105 transition">
              <h3 class="text-blue-700 font-bold text-xl mb-2">{{ $promo->title }}</h3>
              <p class="text-gray-600">{{ $promo->description }}</p>
            </div>
          @endif
        @endforeach
      </div>
    </div>

  </div>
</div>
@endsection
