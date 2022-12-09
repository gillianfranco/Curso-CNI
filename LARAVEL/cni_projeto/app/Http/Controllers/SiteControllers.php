<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteControllers extends Controller
{
    /**Acessa o sobre */
    public function sobre(){
        echo "Acessou o Sobre";
    }

    /**Acessa o home */
    public function home(){
        echo "Acessou o Home";
    }

    /**Acessa o servico */
    public function servico(){
        echo "Acessou o servico";
    }

    /**Acessa os servicos */
    public function servicos(int $id = null){
        $servicos = [
            1 => [
                'nome' => 'Lavando o carro',
                'descricao' => 'Vai lavar o seu carro'
            ],
            2 => [
                'nome' => 'Montando o carro',
                'descricao' => 'Vai montar seu carro'
            ],
            3 => [
                'nome' => 'Saindo com o carro',
                'descricao' => 'Vai sair com o seu carro'
            ],
        ];
    
        if($id != null){
    
            echo $servicos[$id]['nome']."<br>".$servicos[$id]['descricao'];
    
        }
    }
}
