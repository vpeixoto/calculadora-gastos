<?php

namespace App\Http\Controllers;

use App\Models\Calculadora;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function __construct(Calculadora $calculadora){
        $this->calculadora = $calculadora;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calculadoras = $this->calculadora->orderBy('id', 'desc')->get();
        return response()->json($calculadoras, 200);
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
        $request->validate($this->calculadora->rules());

        $calculadora = $this->calculadora->create([
            'operator' => $request->operator,
            'valor_1' => $request->valor_1,
            'valor_2' => $request->valor_2,
            'valor_total' => $request->valor_total,
        ]);

        return response()->json($calculadora, 201);
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
        $request->validate($this->calculadora->rules());

        $operator = '+';
        $valor_1 = (double)$request->valor_1;
        $valor_2 = (double)$request->valor_2;
        $valor_total = $valor_1 + $valor_2;
        
        $calculadora = $this->calculadora->create([
            'operator' => $operator,
            'valor_1' => $valor_1,
            'valor_2' => $valor_2,
            'valor_total' => $valor_total,
        ]);

        return response()->json($calculadora, 201);
    }

    public function sub(Request $request){
        
        $request->validate($this->calculadora->rules());

        $operator = '-';
        $valor_1 = (double)$request->valor_1;
        $valor_2 = (double)$request->valor_2;
        $valor_total = $valor_1 - $valor_2;
        
        $calculadora = $this->calculadora->create([
            'operator' => $operator,
            'valor_1' => $valor_1,
            'valor_2' => $valor_2,
            'valor_total' => $valor_total,
        ]);
        return response()->json($calculadora, 201);
    }

    public function div(Request $request){
        $request->validate($this->calculadora->rules());

        $operator = '/';
        $valor_1 = (double)$request->valor_1;
        $valor_2 = (double)$request->valor_2;
        $valor_total = $valor_1 / $valor_2;
        
        $calculadora = $this->calculadora->create([
            'operator' => $operator,
            'valor_1' => $valor_1,
            'valor_2' => $valor_2,
            'valor_total' => $valor_total,
        ]);
        return response()->json($calculadora, 201);
    }

    public function mult(Request $request){
        $request->validate($this->calculadora->rules());

        $operator = '*';
        $valor_1 = (double)$request->valor_1;
        $valor_2 = (double)$request->valor_2;
        $valor_total = $valor_1 * $valor_2;
        
        $calculadora = $this->calculadora->create([
            'operator' => $operator,
            'valor_1' => $valor_1,
            'valor_2' => $valor_2,
            'valor_total' => $valor_total,
        ]);
        return response()->json($calculadora, 201);
    }
}
