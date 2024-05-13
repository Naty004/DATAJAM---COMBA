<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SesionUno extends Controller
{
    public function create(){
        return view('auth.sesionUno');
    }

    public function login(Request $request){
        //validación 

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];
    }
}
