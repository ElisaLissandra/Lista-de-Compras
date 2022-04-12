@extends('layouts\app')

@section('title', 'Criar Produto')

@section('content')

    <div class="container mt-5" id="bar">
      <h1>Adicione o novo produto</h1>
    </div>
    <div  class="container" id="form">
        <form action="{{ route('itens-store')}}" method="POST">
         @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="produto">Produto:</label>
                    <input type="text" class="form-control" name="produto" placeholder="Digite o nome do produto...">
                </div>
                <br>
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" name="marca" placeholder="Digite a marca do produto...">
                </div>
                <br>
                <div class="form-group">
                    <label for="unidade">Unidade:</label>
                    <input type="text" class="form-control" name="unidade" placeholder="Digite a quantidade...">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="text" class="form-control" name="valor" placeholder="Digite um valor...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            <div>
        </form>
    </div>
@endsection
