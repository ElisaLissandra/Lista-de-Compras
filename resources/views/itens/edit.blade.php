@extends('layouts\app')

@section('title', 'Editar Produto')

@section('content')

    <div class="container" id="bar">
      <h1>Editar produto</h1>
    </div>
    <div  class="container" id="form">
        <form action="{{ route('itens-update', ['id'=>$itens->id]) }}" method="POST">
         @csrf
         @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="produto">Produto:</label>
                    <input type="text" class="form-control" name="produto"  value="{{ $itens->produto }}" placeholder="Digite o nome do produto...">
                </div>
                <br>
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" name="marca"  value="{{ $itens->marca}}" placeholder="Digite a marca do produto...">
                </div>
                <br>
                <div class="form-group">
                    <label for="unidade">Unidade:</label>
                    <input type="text" class="form-control" name="unidade"  value="{{ $itens->unidade }}" placeholder="Digite a quantidade...">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="text" class="form-control" name="valor" value="{{ $itens->valor }}" placeholder="Digite um valor...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
            <div>
        </form>
    </div>
@endsection
