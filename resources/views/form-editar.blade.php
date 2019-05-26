@extends('principal')

@section('conteudo-principal')

<h2>Editar Título do Livro</h2>
<hr />

<form method="livro" action="{{url('/livros/editar')}}">

    @csrf

    <input type="hidden" name="id" value="{{$livro->id}}">

    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input id="titulo" class="form-control" name="titulo" type="text"
        value="{{$livro->titulo}}">
    </div>

    <div class="form-group">
        <label for="texto">Texto</label>
        <textarea id="texto" class="form-control" rows="3"
        name="texto">{{$livro->texto}}</textarea>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
