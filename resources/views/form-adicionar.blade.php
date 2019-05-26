@extends('principal')

@section('conteudo-principal')

<h2>Adicionar Livro</h2>

<form method="livro" action="{{url('/livros/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input id="titulo" class="form-control" name="titulo" type="text">
    </div>

    <div class="form-group">
        <label for="autor">Autor/label>
        <textarea id="autor" class="form-control" rows="3" name="autor">
        </textarea>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
