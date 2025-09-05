<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-gray-950 text-white font-sans selection:bg-cyan-400/30 relative overflow-x-hidden">

    <!-- Animated gradient background blob -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-[28rem] h-[28rem] bg-purple-500/20 rounded-full blur-3xl animate-ping"></div>

    @include('header')

    <main>
        @yield('content')
    </main>

    @include('scripts')
    @stack('scripts')
</body>

</html>