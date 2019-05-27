<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.empleadosIndex',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.empleadosForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:50',
            'telefono' => 'regex:/^(\d{8,15})$/i',
            'nacimiento' => 'before:5 years ago|after:100 years ago',
        ]);

        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->sexo = $request->sexo;
        $empleado->nacimiento = $request->nacimiento;
        $empleado->telefono = $request->telefono;
        $empleado->puesto = $request->puesto;
        $empleado->direccion = $request->direccion;
        $empleado->save();
        //print_r($request->all());
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.empleadosForm',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:50',
            'telefono' => 'regex:/^(\d{8,15})$/i',
            'nacimiento' => 'before:5 years ago|after:100 years ago',
        ]);

        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->sexo = $request->sexo;
        $empleado->nacimiento = $request->nacimiento;
        $empleado->telefono = $request->telefono;
        $empleado->puesto = $request->puesto;
        $empleado->direccion = $request->direccion;
        $empleado->save();
        return redirect()->route('empleados.index')->with([
            'mensaje' => 'Actualizado con exito',
            'alert-class' => 'alert-warning',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}
