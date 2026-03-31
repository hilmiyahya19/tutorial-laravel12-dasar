<x-layout>
    <h1>This is Player Page</h1>
    <h2>Player List</h2>
    <p>This is the player index page content.</p>
    <ul>
        @foreach ( $data as $player)
            <li>{{ $player['name'] }} - Score: {{ $player['score'] }}</li>
        @endforeach
    </ul>
    <x-slot:footer>
        <strong>Player page.</strong>
    </x-slot:footer>
</x-layout>