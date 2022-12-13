@extends('dashboard.index')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Contato #{{$contatos->id}}</h3>
    </div>
    <div class="card-body">
        <h5>Nome: {{$contatos->nome}}</h5>
        <p>Email: {{$contatos->email}}</p>
        <p>Telefone: {{$contatos->telefone}}</p>
        <p>Endereço: {{$contatos->endereco}}</p>
    </div>
</div>
@endsection
