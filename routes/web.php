<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeuController;

Route::get('/', [MeuController::class,'minhaTela']);
Route::get('/outra', [MeuController::class,'outraTela']);
Route::get('/formulario', [MeuController::class,'myform']);
Route::post('/dados',[MeuController::class,'recebeDados']);
Route::post('/remove',[MeuController::class,'removeDado']);
