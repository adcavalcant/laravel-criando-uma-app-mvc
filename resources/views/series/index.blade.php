<x-layout title="Séries">
    <h1></h1>
    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
