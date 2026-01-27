<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{
    public function store(Request $request){
        $entrada = Entrada::create([
            'id_produto'=>$request->id_produto,
            'quantidade'=>$request->quantidade
        ]);
        return response()->json($entrada);
    }

    public function index(){
        $entrada = Entrada::all();
        return response()->json($entrada);
    }

    public function delete($id){
        $entrada = Entrada::find($id);
        if($entrada == null){
             return response()->json(["mensagem" => 'ID não encontrado']);
        }
       $entrada->delete();
       return response()->json([
        "mensagem" => 'Produto deletado'
       ]);
    }

}
