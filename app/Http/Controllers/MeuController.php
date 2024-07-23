<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuariosModel;


class MeuController extends Controller
{
    public function minhaTela(){
        return view('welcome');
    }

    public function outraTela(){
        return view ('outra');
    }

    public function myform(){
        return view('formulario');
    }


    public function recebeDados(Request $request){
        $data = array(
            'nome' => $request->nome,
            'idade' => $request->idade
        );
        $model = new UsuariosModel();
        $model->nome = $data['nome'];
        $model->idade = $data['idade'];
        $model->save();



    }

}
