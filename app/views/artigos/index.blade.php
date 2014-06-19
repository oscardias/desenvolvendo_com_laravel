@extends('layouts.padrao')

@section('content')
    <h1>
        Artigos
        <small>
            @if ($artigos->count() === 1)
                Um artigo publicado
            @elseif ($artigos->count() > 1)
                {{ $artigos->count() }} artigos
            @else
                Nenhum artigo.
            @endif
        </small>
    </h1>

    <hr>    
    
    {{-- Verifica se existem artigos --}}
    @if($artigos->count())
        {{-- Imprimindo nossos artigos --}}
        @foreach ($artigos as $artigo)
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-time"></span>
                {{ date('d/m/Y H:i', strtotime($artigo->created_at)) }}
                
                <div class="pull-right">
                    <div class="btn-group btn-group-xs">
                        <a href="{{ url('artigos/editar', $artigo->id) }}" title="Editar"
                           class="btn btn-default">Editar</a>
                        <a href="{{ url('artigos/remover', $artigo->id) }}" title="Remover"
                           class="btn btn-default">Remover</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <h2>{{{ $artigo->titulo }}}</h2>
                <hr>
                <div>
                    {{ $artigo->conteudo }}
                </div>
            </div>
        </div>
        @endforeach
    @else
        <h2>Nenhum artigo encontrado.</h2>
    @endif
@stop