<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Produto;

class EntradaController extends Controller
{
    public function store(Request $request){
        $produto = Produto::find($request->id_produto);
        if($produto == null){
            return response()->json([
                'mensagem' => 'não encontrado'
            ]);
            $entrada = Entrada::create([
            'id_produto'=>$request->id_produto,
            'quantidade'=>$request->quantidade
        ]);
        if(isset($request->quantidade)){
            $produto->quantidade_estoque += $request->quantidade;
        }
        $produto->update();
        return response()->json('Atualizado');
    }
}

    public function index(){
        $entrada = Entrada::all();
        return response()->json($entrada);
    }

    public function delete(Request $request, $id){
        $entrada = Entrada::find($id);
        $produto = Produto::find($request->id_produto);
        if($produto == null){
            return response()->json([
                'mensagem' => 'não encontrado'
            ]);
     if(isset($request->quantidade)){
            $produto->quantidade_estoque -= $request->quantidade;
        }
         $produto->update();
        return response()->json('Atualizado');
    }
    }

}
