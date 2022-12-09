<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class DataBase extends Controller
{
    public function data(){
        $data = Client::all();
        
        return view('database', ['data' => $data]);
    }
}
