<x-layout>
  <x-slot name="title"> Minhas persianas </x-slot>

  <h4 class="card-title text-center"> Minhas persianas </h4>

  @if ($persianas->isEmpty())
    <div class="alert alert-primary text-center" role="alert">
      Não existem persianas cadastradas. Adicione uma nova persiana acessando o menu (persianas -> Nova lâmpada)
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
          @foreach ($persianas as $persiana)
            <tr>
              <td> {{ $loop->iteration }} </td>
              <td> {{ $persiana->nome }} </td>
              <td class="text-center">
                <input type="checkbox" name="{{ $persiana->nome }}" id="{{ $persiana->id }}"
                  onclick="atualizarStatus($(this))" @if($persiana->status) checked @endif>
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
      $.get('/persiana/atualizar-status/' + id).then(({
        data
      }) => {
        $.toast('Atualizado com sucesso');
      });
    }
  </script>
</x-layout>
