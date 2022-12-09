<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paginacao extends Controller
{
    public function paginacao(){
        return view('pagina');
    }
}
