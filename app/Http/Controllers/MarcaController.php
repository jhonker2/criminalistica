<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use DB;
use Auth;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Marcas = Marca::All();
         return view('Marcas.GestionMarcas',compact('Marcas'));
    }

     public function lista()
    {
       $Marcas = Marca::All();
       return view('Marcas.TableMarcas',compact('Marcas'));
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
         Modelo::create([
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
        $Modelos = Modelo::find($id);
        return response()->json($Modelos->toArray());
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
        $Modelos = Modelo::find($id);
        $Modelos->fill($request->all());
        $Modelos->save();
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
        $Modelos = Modelo::find($id);
        $Modelos = $Modelos->delete();
        return response()->json([
            "sms"=>"ok" 
            ]);
    }
}
