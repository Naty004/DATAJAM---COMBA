<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterTrabajadorController extends Controller
{
    public function create(){
        return view('auth.registroTrabajador');
    }

    public function register(Request $request){
        //validar datos

        $user = new User();

        $user->nombre_empresa = $request->nombre_empresa;
        $user->nit = $request->nit;
        $user->pais = $request->pais;
        $user->industria = $request->industria;
        $user->nombre_completo = $request->nombre_completo;
        $user->cargo = $request->cargo;
        $user->identificacion = $request->identificacion;
        $user->email = $request->email;
        $user->cargo = $request->name;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect(route('sesionUno')); 
    }
}
