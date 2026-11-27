@props(['title' => 'Solaris'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen flex-col bg-white font-sans text-slate-950 antialiased">
    @include('partials.header')

    <main class="flex flex-1">
        {{ $slot }}
    </main>

    @include('partials.footer')
</body>

</html>