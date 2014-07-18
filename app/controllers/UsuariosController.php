<?php

class UsuariosController extends BaseController
{
    public function getIndex()
    {
        $usuarios = Usuario::get();
        return View::make('usuarios.index', compact('usuarios'));
    }

    public function getInserir()
    {
        $titulo = 'Inserir Usuário - Desenvolvendo com Laravel';
        
        $usuario = new Usuario();
        
        return View::make('usuarios.inserir', compact('titulo', 'usuario'));
    }

    public function postInserir()
    {
        $usuario = new Usuario();

        $usuario->nome = Input::get('nome');
        $usuario->email = Input::get('email');
        $usuario->tipo = Input::get('tipo');
        $usuario->senha = Hash::make(Input::get('senha'));

        $usuario->save();

        return Redirect::to('/usuarios');
    }

    public function getEditar($id)
    {
        $usuario = Usuario::find($id);
        $titulo = 'Editar Usuário - Desenvolvendo com Laravel';
        return View::make('usuarios.editar', compact('usuario', 'titulo'));
    }

    public function postEditar()
    {
        $usuario = Usuario::find(Input::get('id'));

        $usuario->nome = Input::get('nome');
        $usuario->email = Input::get('email');
        $usuario->tipo = Input::get('tipo');
        
        if(Input::get('senha'))
        {
            $usuario->senha = Hash::make(Input::get('senha'));
        }

        $usuario->save();

        return Redirect::to('/usuarios');
    }

    public function getRemover($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return Redirect::to('/usuarios');
    }

}
