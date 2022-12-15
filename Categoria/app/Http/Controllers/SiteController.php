<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class SiteController extends Controller
{
    public function category_view(){
        $categorias = Categoria::get();

        return view('index', ['categorias' => $categorias]);
    }

    public function prod_register(Request $request){
        $produto = $request->except('_token');
        Produto::create($produto);
        return redirect('/');
    }

    public function category(){
        return view('category');
    }
}
