<x-layout title="Séries">
    <a class="btn btn-dark mb-3" href="/series/create">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>
</x-layout>
