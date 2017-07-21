<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Motore;
use DB;
use Auth;
class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Marca = Marca::All();
       return view('vehiculos.GestionVehiculo',compact('Marca'));
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
        Motore::create([
                      'ubicacion' =>$request->input('ubicacion'),
                      'tipo_grabado' =>$request->input('tipo_grabado'),
                      'alineacion' =>$request->input('alineacion'),
                      'simetria' =>$request->input('simetria'),
                      'espacidad' =>$request->input('espacidad'),
                      'cantidad_digitos' =>$request->input('cantidad_digito'),
                      'superficie' =>$request->input('marca'),
                      'densidad' =>$request->input('marca'),
                      'modelo_descripcion' =>$request->input('modelo')
                   ]);
        return response()->json(["registro"=>true]);
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
}
