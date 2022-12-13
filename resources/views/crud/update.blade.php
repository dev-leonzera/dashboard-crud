@extends('adminlte::page')

@section('content')

<div class="card">
    <div class="card-header">
        Cadastrar Contato
    </div>
    <div class="card-body">
        <form action="{{url('/contato/' . $contatos->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome" value="{{$contatos->nome}}" class="form-control"><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" value="{{$contatos->email}}" class="form-control"><br>
            <label for="telefone">Telefone</label><br>
            <input type="text" name="telefone" id="telefone" value="{{$contatos->telefone}}" class="form-control"><br>
            <label for="endereco">Endereço</label><br>
            <input type="text" name="endereco" id="endereco" value="{{$contatos->endereco}}" class="form-control"><br>
            <input type="submit" value="Salvar" class="btn btn-success btn-md">
        </form>
    </div>
</div>
@endsection

