<?php

namespace App\Http\Controllers;

use App\Models\Calculadora;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function show(Calculadora $calculadora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function edit(Calculadora $calculadora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calculadora $calculadora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calculadora  $calculadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calculadora $calculadora)
    {
        //
    }

    public function sum(Request $request)
    {
        //
        $value1 = (float)$request->value1;
        $value2 = (float)$request->value2;
        $total = $value1 + $value2;
        //$total = $value1->sum() + $value2->sum();
        return [
            'operator'=> 'soma',
            'valor1' => $value1,
            'valor2' => $value2,
            'total' => $total
        ];
    }

    public function sub(Request $request){
        $value1 = (float)$request->value1;
        $value2 = (float)$request->value2;
        $total = $value1 - $value2;
        //$total = $value1->sum() + $value2->sum();
        return [
            'operator'=> 'subtracao',
            'valor1' => $value1,
            'valor2' => $value2,
            'total' => $total
        ];
    }

    public function div(Request $request){
        $value1 = (float)$request->value1;
        $value2 = (float)$request->value2;
        $total = $value1 / $value2;
        //$total = $value1->sum() + $value2->sum();
        return [
            'operator'=> 'divisao',
            'valor1' => $value1,
            'valor2' => $value2,
            'total' => $total
        ];
    }

    public function mult(Request $request){
        $value1 = (float)$request->value1;
        $value2 = (float)$request->value2;
        $total = $value1 * $value2;
        //$total = $value1->sum() + $value2->sum();
        return [
            'operator'=> 'multiplicacao',
            'valor1' => $value1,
            'valor2' => $value2,
            'total' => $total
        ];
    }
}
