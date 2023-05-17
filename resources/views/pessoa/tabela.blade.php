@extends('layout.header')
@section('title','Tabela pessoas')
@section('conteudo')
    @if(Session::has('mensagem'))
        <div class="alert alert-success text-center container" role="alert">
            <h6>{{Session::get('mensagem')}}</h6>
        </div>
    @endif
    <table class="table table-hover">
        <th>Código</th>
        <th>Nome</th>
        <th>Cpf</th>
        <th>Última mudança</th>
        @foreach($pessoas as $pessoas)
            <tr>
                <td>{{ $pessoas->id }}</td>
                <td>{{ $pessoas->nome }}</td>
                <td>{{ $pessoas->cpf }}</td>
                <td>{{ $pessoas->updated_at }}</td>
            </tr>
            @endforeach
    </table>
    
@endsection