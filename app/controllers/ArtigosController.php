<?php

class ArtigosController extends BaseController {

    public function getIndex()
    {
        $artigos = Artigo::with('usuario')->get();
        return View::make('artigos.index', compact('artigos'));
    }

    public function getInserir()
    {
        $titulo = 'Inserir Artigo - Desenvolvendo com Laravel';
        return View::make('artigos.inserir', compact('titulo'));
    }

    public function postInserir()
    {
        $artigo = new Artigo();

        $artigo->titulo     = Input::get('titulo');
        $artigo->conteudo   = Input::get('conteudo');
        $artigo->usuario_id = Auth::user()->id;

        $artigo->save();

        return Redirect::to('/artigos');
    }

    public function getEditar($id)
    {
        $artigo = Artigo::find($id);
        $titulo = 'Editar Artigo - Desenvolvendo com Laravel';
        return View::make('artigos.editar', compact('artigo', 'titulo'));
    }

    public function postEditar()
    {
        $artigo = Artigo::find(Input::get('id'));

        $artigo->titulo   = Input::get('titulo');
        $artigo->conteudo = Input::get('conteudo');

        $artigo->save();

        return Redirect::to('/artigos');
    }

    public function getRemover($id)
    {
        $artigo = Artigo::find($id);
        $artigo->delete();

        return Redirect::to('/artigos');
    }
}