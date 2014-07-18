@extends('layouts.padrao')

@section('content')
<div class="row">
    <div class="col-sm-offset-3 col-sm-6">
        {{ Form::open(array(
            'url' => 'entrar',
            'class'  => 'well'
        )) }}
            
            <div class="form-group">
                {{ Form::email('email', '', array('class' => 'form-control input-lg', 'autofocus', 'placeholder' => 'E-mail')) }}
            </div>
            
            <div class="form-group">
                {{ Form::password('senha', array('class' => 'form-control input-lg', 'placeholder' => 'Senha')) }}
            </div>
            
            @if (Session::has('flash_error'))
                <div class="alert alert-danger">E-mail ou senha inválidos.</div>
            @endif
            
            <label class="checkbox">
                {{ Form::checkbox('remember', 'remember', true) }} Lembre-se de mim
            </label>
            
            {{ Form::submit('Entrar', array('class' => 'btn btn-lg btn-primary btn-block')) }}

        {{ Form::close() }}
    </div>
</div>
@stop