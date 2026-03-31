<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <x-nav-link href="/" active="page" :highlight="false">Home</x-nav-link>
        <x-nav-link href="/about">About</x-nav-link>
        <x-nav-link href="/contact">Contact</x-nav-link>
        <x-nav-link href="/player">Player</x-nav-link>
    </nav>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <p>This is footer from <span>{{ $footer }}</span></p>
    </footer>
</body>
</html>