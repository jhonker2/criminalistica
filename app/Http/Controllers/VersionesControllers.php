<?php

namespace App\Http\Controllers;
use DB;
use App\versione;
use App\Modelo;

use Illuminate\Http\Request;

class VersionesControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Versiones = DB::select('SELECT v.id, m.modelo_descripcion,v.version_descripcion  FROM versiones v, modelos m where v.id_modelo = m.id') ;
        $Modelos = Modelo::All();
         return view('versiones.GestionVersiones',compact('Versiones','Modelos'));
    }

    public function lista()
    {
        $Versiones = DB::select('SELECT v.id, m.modelo_descripcion,v.version_descripcion  FROM versiones v, modelos m where v.id_modelo = m.id') ;
        return view('versiones.TablaVersiones',compact('Versiones'));
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
       Versione::create([
                      'id_modelo' =>$request->input('modelos'),
                      'version_descripcion' =>$request->input('versiones')
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
        $Versiones = Versione::find($id);
        return response()->json($Versiones->toArray());
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
        $Versiones = Versione::find($id);
        $Versiones->fill($request->all());
        $Versiones->save();
        return response()->json([
            "sms"=>"ok" 
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Versiones = Versione::find($id);
        $Versiones = $Versiones->delete();
        return response()->json([
            "sms"=>"ok" 
            ]);
    }
}
