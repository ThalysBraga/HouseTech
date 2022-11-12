<x-layout>
  <x-slot name="title"> Minhas lâmpadas </x-slot>

  <h4 class="card-title text-center"> Minhas lâmpadas </h4>

  @if ($lampadas->isEmpty())
    <div class="alert alert-primary text-center" role="alert">
      Não existem lâmpadas cadastradas. Adicione uma nova lâmpada acessando o menu (Lâmpadas -> Nova lâmpada)
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
          @foreach ($lampadas as $lampada)
            <tr>
              <td> {{ $loop->iteration }} </td>
              <td> {{ $lampada->nome }} </td>
              <td class="text-center">
                <input type="checkbox" name="{{ $lampada->nome }}" id="{{ $lampada->id }}"
                  onclick="atualizarStatus($(this))">
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
        console.log(ok);
      });
    }
  </script>
</x-layout>
