@extends('layouts.app')

@section('content')

<div class="relative min-h-screen p-8 flex flex-col gap-16 items-center">

  {{-- Hero --}}
  <div class="text-center relative space-y-4 mt-12 backdrop-blur-lg bg-white/50 p-8 rounded-2xl shadow-xl">
    <h1 class="text-5xl font-extrabold text-blue-800">Selamat Datang di Sakinah Laundry!</h1>
    <p class="text-lg text-gray-700">Layanan laundry cepat, bersih, praktis langsung dari genggaman kamu!</p>
    <a href="/login" class="inline-block px-7 py-3 bg-blue-500 text-white rounded-full font-semibold shadow-lg hover:bg-blue-600 transition">
      Mulai Order Sekarang
    </a>
  </div>

  {{-- Statistik --}}
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
    
  </div>

  {{-- Keunggulan --}}
  <div class="w-full max-w-5xl">
    <h2 class="text-3xl font-bold text-blue-800 text-center mb-8">Kenapa Pilih Kami?</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="p-6 bg-white/50 backdrop-blur-xl rounded-xl shadow text-center">
        <h3 class="text-xl font-bold text-blue-700 mb-2">Proses Cepat</h3>
        <p class="text-gray-600">Laundry selesai dalam 24 jam.</p>
      </div>
      <div class="p-6 bg-white/50 backdrop-blur-xl rounded-xl shadow text-center">
        <h3 class="text-xl font-bold text-blue-700 mb-2">Pickup & Delivery</h3>
        <p class="text-gray-600">Gratis jemput & antar cucian kamu.</p>
      </div>
      <div class="p-6 bg-white/50 backdrop-blur-xl rounded-xl shadow text-center">
        <h3 class="text-xl font-bold text-blue-700 mb-2">Garansi Rapi</h3>
        <p class="text-gray-600">Pasti bersih, wangi, dan rapi.</p>
      </div>
    </div>
  </div>

  {{-- Testimoni --}}
  <div class="w-full max-w-4xl space-y-6">
    <h2 class="text-3xl font-bold text-blue-800 text-center mb-6">Testimoni Pengguna</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="p-5 bg-white/50 backdrop-blur-xl rounded-lg shadow">
        <p class="text-gray-700 italic">"Laundry cepat, wangi, dan hasilnya rapi. Favorit saya!"</p>
        <p class="text-sm text-blue-600 font-semibold mt-3">— Dimas R., Mahasiswa</p>
      </div>
      <div class="p-5 bg-white/50 backdrop-blur-xl rounded-lg shadow">
        <p class="text-gray-700 italic">"Order di aplikasi, jemput ke kos, praktis banget."</p>
        <p class="text-sm text-blue-600 font-semibold mt-3">— Ayu S., Freelancer</p>
      </div>
    </div>
  </div>

</div>

@endsection
