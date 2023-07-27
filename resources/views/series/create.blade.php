<x-layout title="Nova Série">
    <form action="/series/save" method="post">
        @csrf
        <div>
            <label class="form-label" for="nome">Nome: </label>
            <input class="form-control" type="text" id="nome" name="nome">
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</x-layout>
