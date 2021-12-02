<?php

namespace App\Http\Controllers;

use App\Veiculo;
use Illuminate\Http\Request;
use App\Http\Requests\VeiculosformRequest;

class CadastroController extends Controller
{
    public function index(Request $request){
       $mensagem = $request->session()->get('mensagem');
       $veiculo = Veiculo::all();
       return view('cadastro.index', compact('veiculo', 'mensagem'));
    }
    public function create(){
       
        return view('cadastro.homecadastro');
     }

     public function store(VeiculosformRequest $request){
       //$nome = $request->nome;
      
       Veiculo::create($request->all());
      /*
       Veiculo::create([
         'marca'  => $nome,
         'modelo' => 2021,
         'versao' => "Teste1",
         'tipo'   => 1
       ]); */
       $request->session()->flash('mensagem',"Registrado com sucesso!");
       return redirect('/teste');
        
     }
     public function buscar(int $id){

      $veiculo = Veiculo::find($id);
      var_dump($veiculo);

     }
}
