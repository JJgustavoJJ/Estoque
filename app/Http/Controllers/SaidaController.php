<?php

namespace App\Http\Controllers;

use App\Models\Saida;
use Illuminate\Http\Request;

class SaidaController extends Controller
{
     public function store (Request $request){
$saida = Saida::create([
   'id_cliente'=>$request->id_cliente,
   'id_produto'=>$request->id_produto,
   'quantidade'=>$request->quantidade
    
]);
return response()->json($saida);
}

public function index(){
        $saida = Saida::all();
        return response()->json($saida);
    }

      public function delete($id){
        $saida = Saida::find($id);
        if($saida == null){
             return response()->json(["mensagem" => 'ID não encontrado']);
        }
       $saida->delete();
       return response()->json([
        "mensagem" => 'deletado'
       ]);
    }
}