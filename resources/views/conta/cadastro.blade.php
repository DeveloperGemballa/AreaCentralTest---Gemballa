@extends('layout.header')
@section('title','Cadastro de contas')
@section('conteudo')
    @if(Session::has('mensagem'))
        <div class="alert alert-success text-center container" role="alert">
            <h6>{{Session::get('mensagem')}}</h6>
        </div>
    @endif
    <div class="container position-absolute top-50 start-50 translate-middle">
        {!! Form::open(['route' => 'contas.store', 'method' => 'POST']) !!}
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Titular: </span>
            <select class="form-select" aria-label="Default select example"  name="codP" id="codP">
                @foreach($pessoas as $pessoas)
                    <option value="{{ $pessoas->id }}">{{ $pessoas->nome }}</option>
                @endforeach
            </select>
        </div>
                    <div class="mb-3">
                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Saldo da conta: </span>
        {!! Form::number('saldo', '', ['class'=>'form-control', 'required', 'placeholder' =>'Insira o saldo...']) !!}
            </div>
                        <div class="form-text" id="basic-addon4">Preencha com números</div>
                    </div>
        <hr>
        {!! Form::submit('Salvar',['class'=>'btn btn-outline-success btn-sm']) !!} |
        {!! Form::button('Cancelar',['onclick'=>'javascript:history.go(-1)', 'class'=>'btn btn-outline-danger btn-sm'])!!}
        {!! Form::close() !!}
    </div>
    
@endsection