<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class mensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mensagem::create([
            'titulo' => 'Prova de Matemática',
            'autor' => 'Prova sobre números imaginários',
            'mensagem' => '2018-09-01 13:15:00',
            'user_id'=> 1,
            'atividade_id' => 1
        ]);

        mensagem::create([
            'titulo' => 'desenvolver trabalho',
            'autor' => 'Implementar trabalho',
            'mensagem' => '2018-09-01 13:15:00',
            'user_id'=> 1,
            'atividade_id' => 1
        ]);

    }
}
