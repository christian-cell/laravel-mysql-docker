<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // creamos el cliente
        $clientes = Cliente::all();

        return $clientes;
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
        //creamos un nuevo cliente

        $clientes = new Cliente();
        $clientes->nombre = $request->nombre;
        $clientes->primer_apellido = $request->primer_apellido;
        $clientes->segundo_apellido = $request->segundo_apellido;
        $clientes->edad = $request->edad;

        $clientes->save();

        return $clientes;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        

        $cliente = Cliente::findOrFail($request->id);
        return $cliente;
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
    public function update(Request $request/* , $id */)
    {
        // para actualizar un cliente

        $clientes =  Cliente::findOrFail($request->id);
        
        $clientes->nombre = $request->nombre;
        $clientes->primer_apellido = $request->primer_apellido;
        $clientes->segundo_apellido = $request->segundo_apellido;
        $clientes->edad = $request->edad;

        $clientes->save();
        return $clientes;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //para eliminar un cliente
        $clientes = Cliente::destroy($request->id);
    }
}
