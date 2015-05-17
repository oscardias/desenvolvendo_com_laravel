<?php

class Artigo extends Eloquent
{
    // Relacionamento com usuários
    public function usuario()
    {
        return $this->belongsTo('Usuario');
    }
}