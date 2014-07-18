@extends('layouts.padrao')

@section('content')
    <h1>Usuários</h1>

    <hr>    
    
    {{-- Verifica se existem usuarios --}}
    @if($usuarios->count())
        {{-- Imprimindo nossos artigos --}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th width="25%">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ ($usuario->tipo == 'admin'?'Administrador':'Autor') }}</td>
                    <td>
                        <div class="btn-block">
                            <a href="{{ url('usuarios/editar', $usuario->id) }}" class="btn btn-primary btn-xs">
                                <span class="glyphicon glyphicon-edit"></span>
                                Editar
                            </a>
                            <a href="{{ url('usuarios/remover', $usuario->id) }}" class="btn btn-danger btn-xs">
                                <span class="glyphicon glyphicon-remove"></span>
                                Remover
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>Nenhum usuário cadastrado.</h2>
    @endif
@stop