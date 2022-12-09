<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(string $nome = "Não identificado!")
    {
        echo "O nome é ".$nome;
    }
}
