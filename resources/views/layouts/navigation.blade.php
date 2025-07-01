<nav class="bg-gradient-to-r from-blue-200 via-blue-300 to-blue-200 p-4 shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">

        <a href="/" class="text-2xl font-extrabold text-blue-800 tracking-wide hover:scale-105 transition">
            LaundryApp
        </a>

        <div class="flex flex-wrap items-center gap-3">
            @auth
                <span class="text-blue-900 font-medium">Hai, {{ Auth::user()->name }}</span>

                {{-- Menu Admin --}}
                @if (Auth::user()->role === 'admin')
                    <a href="{{ url('/admin/dashboard') }}" class="px-4 py-2 bg-blue-400 text-blue-900 rounded-full shadow hover:bg-blue-500 transition font-semibold text-sm">Dashboard</a>
                    <a href="{{ route('admin.services.index') }}" class="px-4 py-2 bg-blue-400 text-blue-900 rounded-full shadow hover:bg-blue-500 transition font-semibold text-sm">Kelola Layanan</a>
                    <a href="{{ route('admin.orders.index') }}" class="px-4 py-2 bg-blue-400 text-blue-900 rounded-full shadow hover:bg-blue-500 transition font-semibold text-sm">Data Order</a>
                @endif


                {{-- Menu User --}}
                @if (Auth::user()->role === 'user')
                    <a href="{{ url('/user/dashboard') }}" class="px-4 py-2 bg-blue-400 text-blue-900 rounded-full shadow hover:bg-blue-500 transition font-semibold text-sm">Dashboard</a>
                    <a href="{{ route('user.orders.create') }}" class="px-4 py-2 bg-blue-400 text-blue-900 rounded-full shadow hover:bg-blue-500 transition font-semibold text-sm">Order Laundry</a>
                    <a href="{{ route('user.orders.history') }}" class="px-4 py-2 bg-blue-400 text-blue-900 rounded-full shadow hover:bg-blue-500 transition font-semibold text-sm">Riwayat Transaksi</a>
                @endif


                {{-- Tombol Profil --}}
                <a href="{{ route('profile.edit') }}"
                   class="px-4 py-2 bg-blue-500 text-white rounded-full shadow hover:bg-blue-600 transition font-semibold text-sm">
                    Profil
                </a>

                {{-- Tombol Logout --}}
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit"
                            class="px-4 py-2 bg-red-200 text-red-800 rounded-full shadow hover:bg-red-300 transition font-semibold text-sm">
                        Logout
                    </button>
                </form>

            @else
                <a href="{{ route('login') }}"
                   class="px-4 py-2 bg-blue-500 text-white rounded-full shadow hover:bg-blue-600 transition font-semibold text-sm">
                    Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="px-4 py-2 bg-green-500 text-white rounded-full shadow hover:bg-green-600 transition font-semibold text-sm">
                        Register
                    </a>
                @endif
            @endauth
        </div>
    </div>
</nav>
