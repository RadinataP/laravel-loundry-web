<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>LaundryApp — Laundry Cepat & Bersih</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }
    .hero {
      background: url('{{ asset('img/jemuran.jpg') }}') no-repeat center center;
      background-size: cover;
      position: relative;
      height: 100vh;
    }
    .overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(2px);
    }
    .bubble {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.3);
      animation: float 15s infinite ease-in-out;
      pointer-events: none;
      z-index: 2;
    }
    @keyframes float {
      0% { transform: translateY(0) scale(1); opacity: 0.6; }
      50% { transform: translateY(-800px) scale(1.4); opacity: 0.1; }
      100% { transform: translateY(0) scale(1); opacity: 0.6; }
    }
  </style>
</head>

<body class="text-gray-800">

  <!-- Hero Section -->
  <div class="hero">

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Bubble Animasi -->
    <div class="bubble w-24 h-24" style="left: 10%; bottom: -100px; animation-delay: 0s;"></div>
    <div class="bubble w-16 h-16" style="left: 30%; bottom: -120px; animation-delay: 2s;"></div>
    <div class="bubble w-20 h-20" style="left: 50%; bottom: -90px; animation-delay: 4s;"></div>
    <div class="bubble w-14 h-14" style="left: 70%; bottom: -130px; animation-delay: 6s;"></div>
    <div class="bubble w-20 h-20" style="left: 85%; bottom: -110px; animation-delay: 8s;"></div>

    <!-- Navbar -->
    <nav class="flex items-center justify-between px-6 py-4 bg-white/80 backdrop-blur-lg shadow relative z-10">
      <a href="#" class="text-3xl font-extrabold text-blue-700">Sakinah Laundry</a>
      <div class="flex gap-3">
        <a href="{{ route('login') }}" class="bg-blue-500 text-white px-5 py-2 rounded-full shadow hover:bg-blue-600 transition">Login</a>
        <a href="{{ route('register') }}" class="border border-blue-500 text-blue-700 px-5 py-2 rounded-full shadow hover:bg-blue-100 transition">Register</a>
      </div>
    </nav>

    <!-- Hero Text -->
    <div class="text-center px-6 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
      <h1 class="text-5xl font-extrabold text-blue-800 drop-shadow-lg mb-5">Laundry Cepat & Wangi!</h1>
      <p class="text-gray-700 text-lg mb-8">Cucian bersih, setrika halus & layanan antar jemput langsung ke rumah Anda.</p>
      <a href="{{ route('login') }}" class="bg-blue-500 text-white px-8 py-3 rounded-full shadow-lg text-lg hover:bg-blue-600 transition">Order Sekarang</a>
    </div>

  </div>

  <!-- Layanan Section -->
  <section class="py-16 bg-white">
    <h2 class="text-3xl font-extrabold text-center text-blue-800 mb-8">Layanan & Harga</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto px-6">
      <div class="p-6 bg-blue-50 rounded-xl shadow hover:scale-105 transition text-center">
        <div class="text-5xl mb-3">🧺</div>
        <h3 class="text-xl font-bold text-blue-700 mb-2">Cuci Setrika</h3>
        <p class="text-gray-600 mb-2">Rp 5.000 / kg</p>
        <p class="text-gray-500 text-sm">Cucian bersih, kering, wangi & disetrika halus.</p>
      </div>

      <div class="p-6 bg-blue-50 rounded-xl shadow hover:scale-105 transition text-center">
        <div class="text-5xl mb-3">👕</div>
        <h3 class="text-xl font-bold text-blue-700 mb-2">Cuci Saja</h3>
        <p class="text-gray-600 mb-2">Rp 3.500 / kg</p>
        <p class="text-gray-500 text-sm">Cucian bersih dan harum tanpa setrika.</p>
      </div>

      <div class="p-6 bg-blue-50 rounded-xl shadow hover:scale-105 transition text-center">
        <div class="text-5xl mb-3">🧴</div>
        <h3 class="text-xl font-bold text-blue-700 mb-2">Setrika Saja</h3>
        <p class="text-gray-600 mb-2">Rp 3.500 / kg</p>
        <p class="text-gray-500 text-sm">Setrika rapi, wangi & langsung pakai.</p>
      </div>

      <div class="p-6 bg-blue-50 rounded-xl shadow hover:scale-105 transition text-center">
        <div class="text-5xl mb-3">🚚</div>
        <h3 class="text-xl font-bold text-blue-700 mb-2">Antar Jemput</h3>
        <p class="text-gray-600 mb-2">Gratis* wilayah tertentu</p>
        <p class="text-gray-500 text-sm">Jemput & antar cucian ke rumah Anda.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center text-gray-600 text-sm py-8 bg-blue-50">
    &copy; {{ date('Y') }} LaundryApp. All rights reserved.
  </footer>

</body>
</html>
