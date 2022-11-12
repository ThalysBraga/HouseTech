<x-layout>
  <x-slot name="title"> Nova lâmpada </x-slot>

  <h3 class="card-title text-center"> Nova Lâmpada</h3><br>
  <form action="{{ route('lampada.store') }}" method="post">
    @csrf
    <div class="p-3">
      <label for="nome">Nome</label>
      <input name="nome" class="form-control" type="text" id="nome" placeholder="Informe o nome" required>
    </div>
    <div class="p-3">
      <label for="grupo">Grupo</label>
      <input name="grupo" class="form-control" type="text" id="grupo" placeholder="Informe o grupo">
    </div>
    <div class="p-3">
      <label for="descricao">Descrição</label>
      <input name="descricao" class="form-control" type="text" id="descricao" placeholder="Informe a descrição">
    </div>

    <div class="text-center p-3">
      <button type="submit" class="btn btn-success">Concluir</button>
    </div>
  </form>
</x-layout>
