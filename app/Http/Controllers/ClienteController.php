<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use GuzzleHttp\Client;

class ClienteController extends Controller
{
    public function store (Request $request){
      $cliente = Cliente::where('cpf', '=', $request->cpf)->get();
      
      if($cliente->count() == 1){
        return response()->json(['mensagem'=>'cpf duplicado']);
      }
      
        $cliente = Cliente::create([
        'nome'=>$request->nome,
        'cpf'=>$request->cpf,
        'idade'=>$request->idade

      ]);  
    return response()->json($cliente);
    }

    public function index(){
        $cliente = Cliente::all();
        return response()->json($cliente);
    }

    



}
