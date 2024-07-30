<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuariosModel;
use Validator;


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
        $validator = Validator::make($request->all(),
        [
        'nome' => 'required|min:5|max:255',
        'idade' => 'required|numeric'
        ]
        );
        if ($validator->fails()){
            return back()->withError($validator)->withInput();
        }
        $data = array(
            'nome' => $request->nome,
            'idade' => $request->idade
        );
        $model = new UsuariosModel();
        $model->nome = $data['nome'];
        $model->idade = $data['idade'];
        $model->save();

        return redirect('/')->with('success','Registro de dados realizado com sucesso');

    }

    public function removeDado(Request $request){
        $id = $request->id_for_removing;
        //echo "ID".$id;
        $model = new UsuariosModel();
        $model->find($id)->delete();
        return redirect('/')->with('success_removing','Registro removido com sucesso');
    }

    public function editDadoForm($id){

        // pegar dados do BD
        $model = new UsuariosModel();
        $dados['data'] = $model->find($id);
        return view ('formedit',$dados);
    }

    public function updateDado(Request $request){
        $meu_array = array(
            'nome' => $request->nome,
            'idade' => $request->idade
        );
        $id = $request->id_for_updating;

        $model = new UsuariosModel();
        $model->find($id)->update($meu_array);
        return redirect('/')->with('success_update','Registro atualizado com sucesso');

    }


}
