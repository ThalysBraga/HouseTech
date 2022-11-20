<x-layout>
  <x-slot name="title"> Meus varais </x-slot>

  <h4 class="card-title text-center"> Meus varais </h4>

  @if ($varais->isEmpty())
    <div class="alert alert-primary text-center" role="alert">
      Não existem varais cadastradas. Adicione um novo varal acessando o menu (varais -> Nova lâmpada)
    </div>
  @else
    <div class="table-responsive">
      <table class="table table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($varais as $varal)
            <tr>
              <td> {{ $loop->iteration }} </td>
              <td> {{ $varal->nome }} </td>
              <td class="text-center">
                <input type="checkbox" name="{{ $varal->nome }}" id="{{ $varal->id }}"
                  onclick="atualizarStatus($(this))" @if($varal->status) checked @endif>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endif

  <script>
    function atualizarStatus(el) {
      let id = $(el).attr('id');
      $.get('/lampada/atualizar-status/' + id).then(({
        data
      }) => {
        $.toast('Atualizado com sucesso');
      });
    }
  </script>
</x-layout>
