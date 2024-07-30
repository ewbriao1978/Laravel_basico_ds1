<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuariosModel;


class MeuController extends Controller
{
    public function minhaTela(){

        $model = new UsuariosModel();
        $dados['data'] = $model->all();
       // var_dump($dados['data']);
        return view('welcome',$dados);
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

        return redirect('/')->with('sucess','Registro de dados realizado com sucesso');

    }

    public function removeDado(Request $request){
        $id = $request->id_for_removing;
        //echo "ID".$id;
        $model = new UsuariosModel();
        $model->find($id)->delete();
        return redirect('/')->with('sucess_removing','Registro removido com sucesso');
    }

    public function editDadoForm($id){

        // pegar dados do BD
        $model = new UsuariosModel();
        $dados['data'] = $model->find($id);
        return view ('formedit',$dados);
    }

    public function updateDado(Request $request){
        $data = array(
            'nome' => $request->nome,
            'idade' => $request->idade
        );
        $id = $request->id_for_updating;
        $model = new UsuariosModel();


    }


}
