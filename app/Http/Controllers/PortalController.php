<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function index(){
        return view('Projeto');    
    }
    public function formulario(Request $request){
        $nome = $request->nome;
        $morada = $request->morada;
        $empregos = $request->empregos;
        return view('formulario',[
            'nome'=>$nome,
            'morada'=>$morada,
            'empregos'=>$empregos
        ]);
    }
    public function mostrarformulario(){
        return view('formulario');
    }  
    
    public function execformulario(){
        return view('execformulario');
    }
}