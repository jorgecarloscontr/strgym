<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Membresia;
use App\Cliente;
use Illuminate\Http\Request;

class MembresiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $clientes = Cliente::all();
        $clientes_membresias = Cliente::has('membresias')->get();//clientes con membresias- Relationship Existence
        return view('membresias.membresiasIndex',compact('user','clientes','clientes_membresias'));
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

        $membresia = new Membresia();
        $membresia->cliente_id = $request->cliente_id;
        $membresia->user_id = $request->user_id;
        $membresia->modalidad= $request->modalidad;
        $membresia->cantidad = $request->cantidad;
        $membresia->recibido = \Carbon\Carbon::now()->toDateTimeString();
        $membresia->save();
        return redirect()->route('membresias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Membresia  $membresia
     * @return \Illuminate\Http\Response
     */
    public function show(Membresia $membresia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Membresia  $membresia
     * @return \Illuminate\Http\Response
     */
    public function edit(Membresia $membresia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Membresia  $membresia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membresia $membresia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Membresia  $membresia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membresia $membresia)
    {
        //
    }
    public function show_membresias_cliente(Cliente $cliente)
    {
        $membresias = $cliente->membresias->all();
        return view('membresias.membresiasShow',compact('membresias','cliente'));

    }
}
