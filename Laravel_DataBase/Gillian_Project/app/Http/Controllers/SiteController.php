<?php

namespace App\Http\Controllers;

use App\Models\Client;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $data = Client::get();
        return view('home', ['data' => $data]);
    }

    public function client(int $id){
        
        $client = Client::find($id);

        return view('client', ['client' => $client]);
    }

    public function set(){
        return view('register');
    }

    public function view(Request $request){
        $data = $request->except('_token');

        Client::create($data);

        return redirect('/');
    }
}
