<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title', 'Buffer Zone EMS')</title>

    <!-- Tailwind CSS -->
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

    <!-- Livewire Styles -->
    @livewireStyles

    <style>
        :root {
            --color-navy-primary: #001B3D;
            --color-silver-secondary: #C0C0C0;
            --color-emergency-crimson: #B22222;
            --color-medical-red: #D31111;
            --color-buffer-zone-blue: #00349a;
            --color-pro-navy: #213340;
            --color-pro-navy-light: #2e4a5c;
            --color-clinical-white: #FFFFFF;
            --color-soft-grey: #F4F4F4;
            --color-anchor-grey: #333333;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }

        .btn-emergency {
            @apply bg-red-600 text-white px-4 py-2 rounded transition-colors;
            background-color: #D31111;
        }

        .btn-emergency:hover {
            background-color: #A80D0D;
        }

        .btn-navy {
            @apply bg-blue-900 text-white px-4 py-2 rounded transition-colors;
            background-color: #213340;
        }

        .btn-navy:hover {
            background-color: #2e4a5c;
        }

        .pulse-bar {
            height: 4px;
            background-color: #D31111;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
    </style>
</head>
<body class="bg-white text-gray-900">
    <!-- Navigation -->
    @include('components.navbar')

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Alpine.js is included with Livewire -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
