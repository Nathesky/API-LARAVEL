<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dadosCar = car::All();
        $contador = $dadosCar->count();

        return 'Carros: '.$contador.$dadosCar.Response()->json([],Response::HTTP_NO_CONTENT);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dadosCar = $request->All();
        $validarDados = Validator::make($dadosCar,[
        'marca' => 'required',
        'modelo' => 'required',
        'ano' => 'required',
        'ano' => 'required',
    ]);

    if($validarDados -> fails()){
        return 'Dados inválidos'.$validarDados->error(true). 500;
    }
    $carCadastrar = car::create($dadosCar);
    if($carCadastrar){
        return 'Dados cadastrados com sucesso'.Response()->json([],Response::HTTP_NO_CONTENT);
    }else{
        return 'Dados não cadastrados com sucesso'.Response()->json([],Response::HTTP_NO_CONTENT);;
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(car $car)
    {
        //
    }
}
