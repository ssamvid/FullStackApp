<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Workshop 2' }}</title>
</head>
<body>
    <x-navbar />

    <main class="container mx-auto py-6">
        {{ $slot }}
    </main>

    <x-footer />
</body>
</html>