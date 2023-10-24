<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Setor;

class controlador extends Controller
{

    //pagina inicial
    public function index(){
      return view('index');
   }

 //quando chama o formulário
   public function formFuncionario(){
    return view('formFuncionario');
    }

    //quando chama o formulário
    public function formSetor(){
    return view('formSetor');
     }

    //insere na tabela
    public function preencheSetor(Request $request){
    $db = new Setor();
      Setor::create([
     'nome' => $request->input('nome'),
     'atividade' => $request->input('atividade')
    ]);
      return view('formSetor');
    }

    //insere na tabela
    public function preencheFuncionario(Request $request){
        $existeCPF = Funcionario::where('cpf', $request->input('cpf')) -> exists();

        if($existeCPF){
            echo "<script>alert('CPF já cadastrado!');</script>";
        } else {
        $db = new Funcionario();
      Funcionario::create([
     'nome' => $request->input('nome'),
     'cpf' => $request->input('cpf'),
     'id_setor' => $request->input('setor'),
    ]);
      }
      return view('formFuncionario');
        

    }

    //lista funcionarios
    public function lsFuncionario(){

        $funcionarios = Funcionario:: with ('setor')
        ->orderBy('id_setor')
        ->orderBy('nome')
        ->get();

    return view('lsFuncionario', ['funcionarios' => $funcionarios]);
    }

    //lista setores
    public function lsSetor(){
        $setores = Setor::all();

    return view('lsSetor', ['setores' => $setores]) ;
    }
}
