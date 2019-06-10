<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mensagem;

class Atividade extends Model
{
    protected $table = 'atividades';

    public function mensagem(){
        return $this->hasMany(Mensagem::class);
    }
}


