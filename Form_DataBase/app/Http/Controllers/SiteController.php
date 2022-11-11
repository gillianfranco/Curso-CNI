<?php

namespace App\Http\Controllers;

use App\Models\Dado;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Redireciona para o formulário
    public function index(){
        return view('index');
    }

    // Coleta os dados e armazena no banco de dados
    public function getData(Request $request){
        $data = $request->except('_token');
        
        Dado::create($data); 

        return redirect('/');
    }
}
