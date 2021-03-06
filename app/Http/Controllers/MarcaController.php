<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use Storage;
use DB;
use Auth;
use Hash;
use Illuminate\Support\Facades\Validator;
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
        $archivo = $request->file('archivo');
            $input  = array('image' => $archivo) ;
            $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif');
            $validacion = Validator::make($input,  $reglas);
        if ($validacion->fails()){
               return response()->json(array('error_imagen'=>false));      
            }else {
                $nombre_original=$archivo->getClientOriginalName();
                $extension=$archivo->getClientOriginalExtension();
                $nuevo_nombre="Marca-".$nombre_original;
                $r1=Storage::disk('Marcas')->put($nuevo_nombre,  \File::get($archivo) );
                $rutadelaimagen="fotos_marcas/".$nuevo_nombre;
            if ($r1){
             Marca::create([
                'marca'=>$request->input('marca'),
                'logo'=>$rutadelaimagen
            ]);
            return response()->json(array('registro'=>true));
                    }else
                    {   return response()->json(array('error_imagen'=>true)); }
        }
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
        $Marcas = Marca::find($id);
        return response()->json($Marcas->toArray());
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
        $Marcas = Marca::find($id);
        $Marcas->fill($request->all());
        $Marcas->save();
        return response()->json([
            "sms"=>"ok" 
            ]);
    }

    public function updateMarca(Request $request){
        $archivo = $request->file('foto_marca');
        if($archivo == null || $archivo ==""){
            $Marca = DB::table("marcas")
                    ->where('id',$request->input("IdMarca_a"))
                    ->update(['marca'=>$request->input("marca_A")]);
            return response()->json(["sms"=>"ok" ]);
        }else{
            
                $input  = array('image' => $archivo) ;
                $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif');
                $validacion = Validator::make($input,  $reglas);
                if ($validacion->fails()){
                    return response()->json(array('error_imagen'=>false));      
                }else {
                    $nombre_original=$archivo->getClientOriginalName();
                    $extension=$archivo->getClientOriginalExtension();
                    $nuevo_nombre="Marca-".$nombre_original;
                    $r1=Storage::disk('Marcas')->put($nuevo_nombre,  \File::get($archivo) );
                    $rutadelaimagen="fotos_marcas/".$nuevo_nombre;
                    if ($r1){
                    $Marca = DB::table("marcas")
                    ->where('id',$request->input("IdMarca_a"))
                    ->update(['marca'=>$request->input('marca_A'),'logo'=>$rutadelaimagen]);  
                        if($Marca==1){
                            return response()->json(["sms"=>"ok" ]);
                        }else{
                            return response()->json(["sms"=>"error" ]);
                        }
                    }else{
                       return response()->json(array('error_imagen'=>true));}
                }
            }
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
