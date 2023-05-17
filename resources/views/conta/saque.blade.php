@extends('layout.header')
@section('title','Saque de conta')
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
            <tr>
                <td>{{ $conta->id }}</td>
                <td>{{ $conta->titular_id }} {{ $titular->nome }}</td>
                <td>{{ $conta->saldo }}</td>
                <td>{{ $conta->updated_at }}</td>
            </tr>
    </table>
    
@endsection