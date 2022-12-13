@extends('dashboard.index')
@section('content')
    <div class="card">
        <div class="card-header">
            Contatos
        </div>
        <div class="card-body">
            <a href="{{url('/contato/create')}}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i>
                Novo Contato
            </a>
            <br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th>#</th> --}}
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contatos as $item)
                            <tr>
                                {{-- <td>{{$loop->iteration}}</td> --}}
                                <td>{{$item->nome}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->telefone}}</td>
                                <td>{{$item->endereco}}</td>
                                <td>
                                    <a href="{{url('/contato/' . $item->id)}}">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="fa fa-eye"></i>
                                            Ver
                                        </button>
                                    </a>
                                    <a href="{{url('/contato/' . $item->id . '/edit')}}">
                                        <button class="btn btn-secondary btn-sm">
                                            <i class="fa fa-edit"></i>
                                            Editar
                                        </button>
                                    </a>
                                    <form action="{{url('/contato/' . $item->id)}}" method="post" style="display: inline">
                                        {{@method_field('DELETE')}}
                                        {!! csrf_field() !!}
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                            Apagar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
