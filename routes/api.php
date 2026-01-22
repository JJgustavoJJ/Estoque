<?php

use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::PUT('/Produto',[ProdutoController::class,'update']);
Route::GET('/Produto',[ProdutoController::class, 'index' ]);
Route::DELETE('/Produto',[ProdutoController::class, 'delete' ]);
Route::POST('/Produto',[ProdutoController::class, 'store' ]);
