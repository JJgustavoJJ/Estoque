<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SaidaController;
use App\Models\Cliente;
use App\Models\Entrada;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::PUT('/Produto/{id}',[ProdutoController::class,'update']);
Route::GET('/Produto',[ProdutoController::class, 'index' ]);
Route::DELETE('/Produto/delete/{id}',[ProdutoController::class, 'delete' ]);
Route::POST('/Produto',[ProdutoController::class, 'store' ]);


Route::GET('/Cliente',[ClienteController::class,'index']);
Route::POST('/Cliente',[ClienteController::class,'store']);

Route::DELETE('/Entrada/delete/{id}',[EntradaController::class, 'delete' ]);
Route::GET('/Entrada',[EntradaController::class, 'index' ]);
Route::POST('/Entrada',[EntradaController::class, 'store' ]);   

Route::DELETE('/Saida/delete/{id}',[SaidaController::class, 'delete' ]);
Route::GET('/Saida',[SaidaController::class, 'index' ]);
Route::POST('/Saida',[SaidaController::class, 'store' ]);   