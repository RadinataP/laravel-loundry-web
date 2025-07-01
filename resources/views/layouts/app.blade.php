<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Sakinah Laundry')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }

    /* Efek background animate */
    .bg-animate {
      background: linear-gradient(-45deg, #dbeafe, #e0f2fe, #f0f9ff, #ffffff);
      background-size: 400% 400%;
      animation: gradientMove 12s ease infinite;
    }

    @keyframes gradientMove {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }

    /* Efek bubble yang diperjelas */
    .bubble {
      position: absolute;
      bottom: -160px;
      background: radial-gradient(circle at 30% 30%, rgba(147,197,253,0.5), rgba(255,255,255,0.3));
      border-radius: 50%;
      animation: rise 20s infinite ease-in;
      opacity: 0.8;
      box-shadow: 0 0 25px rgba(147,197,253,0.4);
      filter: blur(1px);
    }

    @keyframes rise {
      0% {
        transform: translateY(0) scale(1);
        opacity: 0.8;
      }
      100% {
        transform: translateY(-1400px) scale(1.8);
        opacity: 0;
      }
    }

    /* Tombol navbar yang diubah */
    .nav-btn {
      @apply px-5 py-2 rounded-full font-semibold text-sm transition duration-300 shadow-md;
      background: linear-gradient(to right, #3b82f6, #60a5fa);
      color: white;
    }

    .nav-btn:hover {
      background: linear-gradient(to right, #2563eb, #3b82f6);
      box-shadow: 0 4px 14px rgba(59,130,246,0.4);
      transform: translateY(-1px);
    }

    .logout-btn {
      @apply px-5 py-2 rounded-full font-semibold text-sm transition duration-300 shadow-md;
      background: #ef4444;
      color: white;
    }

    .logout-btn:hover {
      background: #dc2626;
      box-shadow: 0 4px 14px rgba(239, 68, 68, 0.4);
      transform: translateY(-1px);
    }
  </style>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-animate flex flex-col text-gray-800 antialiased relative overflow-x-hidden">

  {{-- Bubble Background --}}
  @for ($i = 0; $i < 25; $i++)
    <div class="bubble"
      style="left: {{ rand(0, 100) }}%; width: {{ rand(30, 90) }}px; height: {{ rand(30, 90) }}px; animation-delay: -{{ rand(0, 25) }}s;">
    </div>
  @endfor

  {{-- Navbar --}}
  <nav class="w-full bg-gradient-to-r from-blue-400 via-blue-300 to-blue-400 shadow-lg sticky top-0 z-50 backdrop-blur-md">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
      <a href="/" class="text-2xl font-extrabold text-white tracking-wide">Sakinah Laundry</a>

      <div class="flex items-center gap-3">
        @auth
          <span class="text-sm text-white font-medium">Hai, {{ Auth::user()->name }}</span>

          @if (Auth::user()->role === 'admin')
            <a href="{{ route('admin.dashboard') }}" class="nav-btn">Dashboard</a>
            <a href="{{ route('admin.services.index') }}" class="nav-btn">Layanan</a>
            <a href="{{ route('admin.orders.index') }}" class="nav-btn">Order</a>
          @elseif (Auth::user()->role === 'user')
            <a href="{{ route('user.dashboard') }}" class="nav-btn">Dashboard</a>
            <a href="{{ route('user.orders.create') }}" class="nav-btn">Order</a>
            <a href="{{ route('user.orders.history') }}" class="nav-btn">Riwayat</a>
          @endif

          <a href="{{ route('profile.edit') }}" class="nav-btn">Profil</a>

          <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
          </form>
        @else
          <a href="{{ route('login') }}" class="nav-btn">Login</a>
          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="nav-btn">Register</a>
          @endif
        @endauth
      </div>
    </div>
  </nav>

  {{-- Content --}}
  <main class="flex-1 container mx-auto py-16 relative z-10">
    @yield('content')
  </main>

  {{-- Footer --}}
  <footer class="text-center text-sm text-gray-600 py-6 relative z-10">
    &copy; {{ date('Y') }} Sakinah Laundry. All rights reserved.
  </footer>

</body>
</html>
