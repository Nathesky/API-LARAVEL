<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\CarController;


route::get('/', function(){
    return Response()->json(['sucesso'=>true]);
});

route::get('/cars',[CarController::class,'index']);

route::post('/carscadastra', [CarController::class, 'store']);