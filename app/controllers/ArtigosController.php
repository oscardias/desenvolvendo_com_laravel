<?php

class ArtigosController extends BaseController {

    public function getIndex()
    {
        $artigos = Artigo::get();
        return View::make('artigos', compact('artigos'));
    }

    public function getInserir()
    {
        return View::make('artigos_inserir');
    }
    
    public function postInserir()
    {
        $artigo = new Artigo();

        $artigo->titulo   = Input::get('titulo');
        $artigo->conteudo = Input::get('conteudo');

        $artigo->save();

        return Redirect::to('/artigos');
    }
    
    public function getEditar($id)
    {
        $artigo = Artigo::find($id);
        return View::make('artigos_editar', compact('artigo'));
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