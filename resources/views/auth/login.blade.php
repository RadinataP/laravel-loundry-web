<x-guest-layout>
    <head>
        <meta charset="UTF-8">
        <title>Login - LaundryApp</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Tailw
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Google Font Poppins -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Poppins', sans-serif;
                overflow-x: hidden;
            }
            .bg-animate {
                background: linear-gradient(-45deg, #93c5fd, #bfdbfe, #c7d2fe, #e0e7ff);
                background-size: 400% 400%;
                animation: gradientMove 8s ease infinite;
            }
            @keyframes gradientMove {
                0% {background-position: 0% 50%;}
                50% {background-position: 100% 50%;}
                100% {background-position: 0% 50%;}
            }

            /* Bubble animation */
            .bubble {
                position: absolute;
                bottom: -150px;
                background: rgba(255, 255, 255, 0.3);
                border-radius: 50%;
                animation: rise 20s infinite ease-in;
                opacity: 0.6;
            }
            @keyframes rise {
                0% {
                    transform: translateY(0) scale(1);
                    opacity: 0.7;
                }
                100% {
                    transform: translateY(-1200px) scale(1.5);
                    opacity: 0;
                }
            }
        </style>
    </head>

    <body class="bg-animate min-h-screen flex items-center justify-center relative">

        <!-- Background bubbles -->
        @for ($i = 0; $i < 20; $i++)
            <div class="bubble"
                 style="left: {{ rand(0, 100) }}%; width: {{ rand(20, 80) }}px; height: {{ rand(20, 80) }}px; animation-delay: -{{ rand(0, 20) }}s;"></div>
        @endfor

        <div class="bg-white/70 backdrop-blur-xl p-8 rounded-2xl shadow-xl w-full max-w-md z-10">
            <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Masuk Sakinah Laundry</h1>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email"
                                  class="block mt-1 w-full"
                                  type="email"
                                  name="email"
                                  :value="old('email')"
                                  required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password"
                                  class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mt-4">
                    <input id="remember_me" type="checkbox"
                           class="rounded border-gray-300 text-blue-500 shadow-sm focus:ring-blue-500"
                           name="remember">
                    <label for="remember_me" class="ms-2 text-sm text-gray-600">Ingat Saya</label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-600 hover:underline"
                           href="{{ route('password.request') }}">
                            Lupa password?
                        </a>
                    @endif

                    <x-primary-button class="ms-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold px-5 py-2 rounded-lg shadow transition">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

    </body>
</x-guest-layout>
