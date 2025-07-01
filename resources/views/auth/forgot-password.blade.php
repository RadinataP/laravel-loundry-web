<x-guest-layout>

    <div class="bg-white/70 backdrop-blur-xl p-8 rounded-2xl shadow-xl w-full max-w-md z-10">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Reset Password</h1>

        <div class="mb-4 text-sm text-gray-600 text-center leading-relaxed">
            {{ __('Lupa password? Tenang saja. Masukkan email akun kamu, nanti kami kirimkan link untuk reset password.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email"
                              class="block mt-1 w-full"
                              type="email"
                              name="email"
                              :value="old('email')"
                              required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mt-6">
                <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:underline">
                    Kembali ke Login
                </a>
                <x-primary-button class="ms-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold px-5 py-2 rounded-lg shadow transition">
                    {{ __('Kirim Link Reset') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</x-guest-layout>
