<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dado;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function coleta(Request $request){
        $dados = $request->except('_token');
        
        Dado::create($dados);

        return redirect('/');
    }
}
