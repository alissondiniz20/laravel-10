{{-- Extends from Index --}}
@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Produtos</h1>
</div>

<div>
  <form action="{{ route('product.index')}}" method="get">
    <input type="text" name="research" placeholder="Digite o nome" />
    <button>Pesquisar</button>
    <a type="button" class="btn btn-success float-end">
      Incluir Produto
    </a>
  </form>
  <div class="table-responsive mt-4">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
          @foreach($findProduct as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ 'R$' . ' ' . number_format($product->value, 2, ',', '.') }}</td>
                <td>
                  <a href="" class="btn btn-light btn-sm">
                    Editar
                  </a>
                  <a href="" class="btn btn-danger btn-sm">
                    Excluir
                  </a>
                </td>
            </tr>            
          @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection