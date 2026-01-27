<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function store (Request $request){
$produto = Produto::create([
    'marca'=>$request->marca,
    'descricao'=>$request->descricao,
    'valor_unitario'=>$request->valor_unitario,
    'quantidade_estoque'=>$request->quantidade_estoque,
    'faixa_etaria_minima'=>$request->faixa_etaria_minima
    
]);
return response()->json($produto);
    }
    public function index(){
        $produto = Produto::all();
        return response()->json($produto);
    }


  public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        if (!$produto) {

            return response()->json(['mensagem' => 'atualizado com sucesso']);
            $produto->update();
        }
        return response()->json([$produto]);
    }

  public function delete($id)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json(["mensagem" => 'ID não encontrado']);
        }if(isset($request->id)){
$produto->$id = $request->id;
        }
         if(isset($request->marca)){
$produto->marca = $request->marca;
        }
         if(isset($request->id)){
$produto->descricao = $request->id;
        }
         if(isset($request->id)){
$produto->valor_unitario = $request->id;
        }
        if(isset($request->id)){
$produto->quantidade_estoque = $request->id;
        }
         if(isset($request->id)){
$produto->faixa_etaria_minima = $request->id;
        }


        $produto->delete();

        return response()->json(["mensagem" => 'deletado com sucesso']);
    }

}
