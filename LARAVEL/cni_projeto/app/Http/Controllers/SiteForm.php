<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteForm extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request  $request)
    {   
        $data = $request->all();
        $email = $data['email'];
        $password = $data['password'];
        $user = [
            'email' => $email,
            'password' => $password
        ];

        return view('vizualiza', ['user' => $user]);
    } 
}
