<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $clientes = Client::all();
       return view ("clientes.index", compact("clientes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['Cedula_Nit'=>'required','Nombre'=>'required']);
        $cliente = new Client;
        $cliente->Cedula_Nit = $request->Cedula_Nit;
        $cliente->Nombre = $request->Nombre;
        $cliente->Observaciones = $request->Observaciones;
        $cliente->Direccion = $request->Direccion;
        $cliente->Telefono = $request->Telefono;
        $cliente->Email = $request->Email;
        $cliente->save();
        return redirect("/clientes");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect("/clientes");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Client::findOrFail($id);
        return view("clientes.edit", compact("cliente"));
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
        $Cliente = Client::where('Id', '=', $id)->update(array(
        'Cedula_Nit' => $request->Cedula_Nit,
        'Nombre' => $request->Nombre,
        'Observaciones' => $request->Observaciones,
        'Direccion' => $request->Direccion,
        'Telefono' => $request->Telefono,
        'Email' => $request->Email));
        return redirect("/clientes");  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Cliente = Client::where('Id', '=', $id)->delete();
        return redirect("/clientes");
    }
}
