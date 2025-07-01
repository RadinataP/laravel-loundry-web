@extends('layouts.app')

@section('content')
<div class="relative overflow-hidden">
  <div class="absolute inset-0 -z-10">
    <div class="absolute w-60 h-60 bg-blue-300 rounded-full opacity-30 blur-3xl animate-ping left-0 top-0"></div>
    <div class="absolute w-72 h-72 bg-blue-400 rounded-full opacity-20 blur-3xl animate-pulse right-10 bottom-10"></div>
  </div>

  <div class="p-6 space-y-8">

    <h1 class="text-4xl font-bold text-blue-800 mb-6">Dashboard Admin</h1>

    {{-- Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="p-5 bg-white rounded-xl shadow text-center">
        <h2 class="text-4xl font-bold text-blue-700">{{ $totalUser }}</h2>
        <p class="text-gray-600">User Terdaftar</p>
      </div>
      <div class="p-5 bg-white rounded-xl shadow text-center">
        <h2 class="text-4xl font-bold text-blue-700">{{ $totalOrder }}</h2>
        <p class="text-gray-600">Order Masuk</p>
      </div>
      <div class="p-5 bg-white rounded-xl shadow text-center">
        <h2 class="text-4xl font-bold text-blue-700">{{ $totalLayanan }}</h2>
        <p class="text-gray-600">Layanan Aktif</p>
      </div>
    </div>

    {{-- Order Terbaru --}}
    <div>
      <h2 class="text-2xl font-semibold text-blue-800 mb-4">Order Terbaru</h2>
      <table class="w-full bg-white rounded-xl shadow overflow-hidden">
        <thead class="bg-blue-100 text-blue-800">
          <tr>
            <th class="p-3 text-left">Nama</th>
            <th class="p-3 text-left">Layanan</th>
            <th class="p-3 text-left">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
            <tr class="border-b hover:bg-blue-50">
              <td class="p-3">{{ $order->user->name }}</td>
              <td class="p-3">{{ $order->service->name }}</td>
              <td class="p-3">{{ $order->status }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    {{-- Chart --}}
    <div>
      <h2 class="text-2xl font-semibold text-blue-800 mb-4">Grafik Order 7 Hari Terakhir</h2>
      <canvas id="orderChart"></canvas>
    </div>

  </div>
</div>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('orderChart').getContext('2d');
  const orderChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: {!! json_encode($labels) !!},
      datasets: [{
        label: 'Order Masuk',
        data: {!! json_encode($data) !!},
        borderColor: '#3b82f6',
        backgroundColor: 'rgba(59, 130, 246, 0.2)',
        tension: 0.3,
        fill: true,
        pointRadius: 5,
        pointHoverRadius: 7
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
          ticks: { stepSize: 1 }
        }
      }
    }
  });
</script>
@endsection
