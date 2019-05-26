<?php

namespace App\Http\Controllers;

use App\Rutina;
use App\Cliente;
use App\Ejercicio;
use Illuminate\Http\Request;

class RutinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('rutinas.rutinasIndex',compact('clientes'));

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
        $rutina = new Rutina;
        $rutina->cliente_id =$request->cliente_id;
        $rutina->nombre = $request->ejercicio_nombre;
        $rutina->descripcion = "fdsf";
        $rutina->save();
        $rutina->ejercicios()->attach($request->ejercicio_id,['series' => $request->series, 'repeticiones' =>$request->repeticiones, 'dia'=>'L']);
        return redirect()->route('rutinas.edit_rutina',$request->cliente_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rutina  $rutina
     * @return \Illuminate\Http\Response
     */
    public function show(Rutina $rutina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rutina  $rutina
     * @return \Illuminate\Http\Response
     */
    public function edit(Rutina $cliente)
    {
        $ejercicios = Ejercicio::all();
        $rutina= $cliente->rutina;
        return view('rutinas.rutinasForm',compact('cliente','ejercicios','rutina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rutina  $rutina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rutina $rutina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rutina  $rutina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rutina $rutina)
    {
        //
    }
    public function create_rutina(Cliente $cliente)
    {
        $ejercicios = Ejercicio::all();
        return view('rutinas.rutinasForm',compact('cliente','ejercicios'));
    }
    public function edit_rutina(Cliente $cliente)
    {
        $ejercicios = Ejercicio::all();
        $rutina= $cliente->rutina;
        return view('rutinas.rutinasForm',compact('cliente','ejercicios','rutina'));
    }
    public function insertar_ejercicio(Request $request, Rutina $rutina)
    {
        foreach($request->dias as $dia){
            $rutina->ejercicios()->attach($request->ejercicio_id,['series' => $request->series, 'repeticiones' =>$request->repeticiones, 'dia'=>$dia]);
        }
        return redirect()->route('rutinas.edit_rutina',$request->cliente_id);
    }
    //Elimina la relacio entre Rutina y un ejercicio dado
    public function elimina_ejercicio(Request $request, Rutina $rutina)
    {
        $rutina->ejercicios()->wherePivot('dia' ,'=' , $request->dia)->detach($request->ejercicio_id);
        return redirect()->route('rutinas.edit_rutina',$request->cliente_id);


    }
}
