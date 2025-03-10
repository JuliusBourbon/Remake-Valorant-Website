<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Valorant</title>
    <style>
        body {
        font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="{{ $background ?? 'bg-gray-100' }}">
    <div class="min-h-full">   
        <x-navbar></x-navbar>

        <!-- Hanya tampilkan header jika halaman bukan 'agents' -->
        @if (!request()->is('agents', 'map', 'agents/*' ))
            <x-header>{{ $title }}</x-header>
        @endif
        
        <main>
            <div class="mx-auto max-w-screen-2xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>