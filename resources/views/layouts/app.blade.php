<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('tracking.ico') }}">
    <title>Tracking Bongkar Muat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    {{-- 👇 TAMBAHKAN BLOK INI UNTUK MENGHILANGKAN GARIS PUTIH --}}
    <style>
        body {
            margin: 0 !important;
        }
    </style>
</head>
<body class="h-full">
    {{ $slot }} 
    @livewireScripts
</body>
</html>