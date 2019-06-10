<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Atividade;

class mensagem extends Model
{
    protected $table = 'mensagem';

    public function atividade(){
        return $this -> belongsTo(Atividade::class);
    }
}
