@extends('layouts.padrao')

@section('content')

<h1>Editar usuário</h1>

<hr>

{{ Form::open(array('url' => 'usuarios/inserir', 'class' => 'form-horizontal', 'role' => 'form')) }}

<div class="form-group">
    <label for="nome" class="col-lg-2 control-label">Nome</label>
    <div class="col-lg-6">
        {{ Form::text('nome', $usuario->nome, array('class' => 'form-control', 'placeholder' => 'Nome')) }}
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-lg-2 control-label">E-mail</label>
    <div class="col-lg-6">
        {{ Form::email('email', $usuario->email, array('class' => 'form-control', 'placeholder' => 'E-mail')) }}
    </div>
</div>

<div class="form-group">
    <label for="senha" class="col-lg-2 control-label">Senha</label>
    <div class="col-lg-6">
        {{ Form::password('senha', array('class' => 'form-control', 'placeholder' => 'Senha')) }}
    </div>
</div>

<div class="form-group">
    <label for="tipo" class="col-lg-2 control-label">Tipo</label>
    <div class="col-lg-6">
        {{ Form::select('tipo', array('admin' => 'Administrador', 'autor' => 'Autor'), $usuario->tipo, array('class' => 'form-control', 'placeholder' => 'Senha')) }}
    </div>
</div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
        <a href="{{ url('usuarios') }}" title="Cancelar" class="btn btn-default">Cancelar</a>
    </div>
</div>

{{ Form::close() }}

@stop
