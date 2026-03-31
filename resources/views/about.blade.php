<x-layout>
    <h1>This is About Page</h1>
    <p>Hello, I am {{ $data }}, I am {{ $age }} years old</p>
    @if ($age > 17)
        <h3>You are old enough to vote president</h3>
    @else
        <h3>You are not old enough to vote president</h3>
    @endif
    <x-slot:footer>
        <strong>About page.</strong>
    </x-slot:footer>
</x-layout>