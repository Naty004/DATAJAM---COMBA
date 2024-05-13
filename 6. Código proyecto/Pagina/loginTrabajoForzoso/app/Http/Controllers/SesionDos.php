<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionDos extends Controller
{
    public function create(){
        return view('auth.sesionDos');
    }
}
