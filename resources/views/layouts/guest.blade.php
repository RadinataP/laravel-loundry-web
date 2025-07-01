<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LaundryApp') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            overflow-y: auto;
        }

        /* Soft blue gradient animation */
        @keyframes bgGradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animated-bg {
            background: linear-gradient(270deg, #dbeafe, #c7d2fe, #bfdbfe, #e0f2fe);
            background-size: 600% 600%;
            animation: bgGradient 15s ease infinite;
        }

        /* Bubble animation */
        .bubble {
            position: absolute;
            bottom: -150px;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            animation: rise 18s infinite ease-in;
            opacity: 0.8;
        }
        @keyframes rise {
            0% {
                transform: translateY(0) scale(1);
                opacity: 0.8;
            }
            100% {
                transform: translateY(-1400px) scale(1.5);
                opacity: 0;
            }
        }
    </style>
</head>
<body class="animated-bg min-h-screen flex items-center justify-center relative text-gray-900 antialiased">

    <!-- Background bubbles -->
    @for ($i = 0; $i < 25; $i++)
        <div class="bubble"
             style="left: {{ rand(0, 100) }}%;
                    width: {{ rand(30, 80) }}px;
                    height: {{ rand(30, 80) }}px;
                    animation-delay: -{{ rand(0, 20) }}s;"></div>
    @endfor

    <!-- Content wrapper -->
    <div class="w-full max-w-md p-6 z-10">
        {{ $slot }}
    </div>

</body>
</html>
