<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Producto;
use App\Venta;
use App\Cliente;
 
class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('ventas.ventasIndex',compact('clientes'));
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
        $venta = new venta;
        $venta->cliente_id =$request->cliente_id;
        $venta->user_id = $request->user_id;
        $venta->fecha = \Carbon\Carbon::now()->toDateTimeString();
        $venta->save();
        $venta->productos()->attach($request->producto_id,['cantidad' => $request->cantidad]);
        $producto = Producto::where('id',$request->producto_id)->first();
        $producto->stock = $producto->stock-$request->cantidad;
        $producto->save();
        return redirect()->route('ventas.edit_venta',$venta);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function edit_venta(Venta $venta)
    {
        $productos = Producto::all();
        $user = Auth::user();
        $clientes  = Cliente::all();
        $cliente =Cliente::where('id',$venta->cliente_id)->first();

        return view('ventas.puntoVenta',compact('cliente','productos','user','clientes','venta'));
    }
    public function create_venta(cliente $cliente)
    {
        $productos = Producto::all();
        $user = Auth::user();
        $clientes  = Cliente::all();
        
        return view('ventas.puntoVenta',compact('cliente','productos','user','clientes'));
    }
    public function insertar_producto(Request $request, Venta $venta)
    {
            $venta->productos()->attach($request->producto_id,['cantidad' => $request->cantidad]);
            $producto = Producto::where('id',$request->producto_id)->first();
            $producto->stock = $producto->stock-$request->cantidad;
            $producto->save();
            return redirect()->route('ventas.edit_venta',$venta);
    }

    public function elimina_producto(Request $request, venta $venta)
    {
        $venta->productos()->wherePivot('cantidad' ,'=' , $request->cantidad)->detach($request->producto_id);
        //eturn redirect()->route('ventas.edit_venta',$venta);


    }
    
}
