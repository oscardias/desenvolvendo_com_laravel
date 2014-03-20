<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('hello');
});

// Listar todos os artigos
Route::get('/artigos/', function()
{
    $artigos = Artigo::get();
    return View::make('artigos', compact('artigos'));
});

// Criar um novo artigo
Route::get('/artigos/inserir', function()
{
    return View::make('artigos_inserir');
});
Route::post('/artigos/inserir', function()
{
    $artigo = new Artigo();
    
    $artigo->titulo   = Input::get('titulo');
    $artigo->conteudo = Input::get('conteudo');
    
    $artigo->save();
    
    return Redirect::to('/artigos/');
});