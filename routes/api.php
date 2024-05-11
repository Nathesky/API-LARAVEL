<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\CarController;


route::get('/', function(){
    return Response()->json(['sucesso'=>true]);
});
//selecionar/contar todos 
route::get('/cars',[CarController::class,'index']);

//cadastrar
route::post('/cars', [CarController::class, 'store']);

//deletar
route::delete('/cars/{id}', [CarController::class, 'destroy']);

//alterar
route::put('/cars/{id}', [CarController::class, 'update']);

//selecionar por id
route::get('/cars/{id}', [CarController::class, 'show']);
