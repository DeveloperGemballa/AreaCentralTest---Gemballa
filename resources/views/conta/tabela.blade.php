@extends('layout.header')
@section('title','Tabela contas')
@section('conteudo')
    @if(Session::has('mensagem'))
        <div class="alert alert-success text-center container" role="alert">
            <h6>{{Session::get('mensagem')}}</h6>
        </div>
    @endif
    <table class="table table-hover">
        <th>Código</th>
        <th>titular identificação</th>
        <th>saldo</th>
        <th>Última mudança</th>
        <th>ação</th>
        @foreach($contas as $contas)
            <tr>
                <td>{{ $contas->id }}</td>
                <td>{{ $contas->titular_id }}</td>
                <td>{{ $contas->saldo }}</td>
                <td>{{ $contas->updated_at }}</td>
                <td><a href="contas/sacar/{{ $contas->id }}">SACAR</a></td>
                <td><a href="contas/depositar/{{ $contas->id }}">DEPOSITAR</a></td>
            </tr>
            @endforeach
    </table>
    
@endsection