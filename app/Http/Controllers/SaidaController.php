<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Saida;
use Illuminate\Http\Request;

class SaidaController extends Controller
{
     public function store (Request $request){
          $cliente = Cliente::find($request->cliente);
          $produto = Produto::find($request->id_produto);
          if($cliente-> idade < $produto-> faixa_etaria_minima){
               return response()->json([
                    "mensagem" => "idade minima não suficiente"
               ]);
$saida = Saida::create([
   'id_cliente'=>$request->id_cliente,
   'id_produto'=>$request->id_produto,
   'quantidade'=>$request->quantidade
    
]);
$produto->quantidade_estoque -= $saida->quantidade;
$produto->update();
return response()->json($saida);
}
     }

public function index(){
        $saida = Saida::all();
        return response()->json($saida);
    }

      public function delete($id){
        $saida = Saida::find($id);
       if(!$saida){
          return response()->json([
               "mensagem" => "produto não encontrado"
          ]);
       }
       $saida->delete($id);
       return response()->json([
          "mensagem" => "Deletado"
       ]);
    }
}