<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Motore;
use App\Chasi;
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
    $id_foto_motor="";$id_foto_vehiculo="";$id_foto_chasis="";$id_foto_plaqueta="";$id_foto_serie="";
        //SUBIR FOTO MOTOR
       $archivo = $request->file('foto_motor');
            $input  = array('image' => $archivo) ;
            $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif');
            $validacion = Validator::make($input,  $reglas);
        if ($validacion->fails()){
               return response()->json(array('error_imagen'=>false));      
            }else {
                $nombre_original=$archivo->getClientOriginalName();
                $extension=$archivo->getClientOriginalExtension();
                $nuevo_nombre="motor-".$nombre_original;
                $r1=Storage::disk('Motor')->put($nuevo_nombre,  \File::get($archivo) );
                $rutadelmotor="fotos_motores/".$nuevo_nombre;
            if ($r1){
                 Foto::create(['foto' =>$rutadelmotor]);
                 $id_foto= DB::select("select max(id) from fotos"); 
                 foreach ($id_foto as $key) {
                   $id_foto_motor= $key->id;
                 }
            }else{
                return response()->json(array('error_imagen'=>true));
            }
            //SUBIR FOTO CHASIS
                   $archivo = $request->file('foto_chasis');
                    $input  = array('image' => $archivo) ;
                    $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif');
                    $validacion = Validator::make($input,  $reglas);
                    if ($validacion->fails()){
                         return response()->json(array('error_imagen'=>false));      
                        }else {
                        $nombre_original=$archivo->getClientOriginalName();
                        $extension=$archivo->getClientOriginalExtension();
                        $nuevo_nombre="chasis-".$nombre_original;
                        $r1=Storage::disk('Chasis')->put($nuevo_nombre,  \File::get($archivo) );
                        $rutadelmotor="fotos_chasis/".$nuevo_nombre;
                    if ($r1){
                    
                    }else{
                        return response()->json(array('error_imagen'=>true));
                    }

             //SUBIR FOTO PLAQUETA 
                   $archivo = $request->file('foto_plaqueta');
                    $input  = array('image' => $archivo) ;
                    $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif');
                    $validacion = Validator::make($input,  $reglas);
                    if ($validacion->fails()){
                         return response()->json(array('error_imagen'=>false));      
                        }else {
                        $nombre_original=$archivo->getClientOriginalName();
                        $extension=$archivo->getClientOriginalExtension();
                        $nuevo_nombre="plaqueta-".$nombre_original;
                        $r1=Storage::disk('Plaqueta')->put($nuevo_nombre,  \File::get($archivo) );
                        $rutadelmotor="fotos_plaquetas/".$nuevo_nombre;
                    if ($r1){
                    
                    }else{
                        return response()->json(array('error_imagen'=>true));
                    } 


                     //SUBIR FOTO SERIE
                    $archivo = $request->file('foto_serieS');
                    $input  = array('image' => $archivo) ;
                    $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif');
                    $validacion = Validator::make($input,  $reglas);
                    if ($validacion->fails()){
                         return response()->json(array('error_imagen'=>false));      
                        }else {
                        $nombre_original=$archivo->getClientOriginalName();
                        $extension=$archivo->getClientOriginalExtension();
                        $nuevo_nombre="serie-".$nombre_original;
                        $r1=Storage::disk('Serie')->put($nuevo_nombre,  \File::get($archivo) );
                        $rutadelmotor="fotos_series/".$nuevo_nombre;
                    if ($r1){
                    
                    }else{
                        return response()->json(array('error_imagen'=>true));
                    }

                  

         Motore::create([
                      'ubicacion' =>$request->input('ubicacion_motor'),
                      'tipo_grabado' =>$request->input('tipo_grabado_M'),
                      'alineacion' =>$request->input('alineacion_m'),
                      'simetria' =>$request->input('simetria_m'),
                      'espacidad' =>$request->input('espacidad_m'),
                      'cantidad_digitos' =>$request->input('cantidad_digitos_m'),
                      'superficie' =>$request->input('superficie_m'),
                      'densidad' =>$request->input('densidad_m'),
                      'modelo_descripcion' =>$request->input('observacion_m')
                   ]);
        $id_foto= DB::select("select max(id) from fotos"); 
                 foreach ($id_foto as $key) {
                   $id_foto_motor= $key->id;
                 }
        
        Chasi::create([
                      'ubicacion' =>$request->input('ubicacion'),
                      'tipo_grabado' =>$request->input('tipo_grabado'),
                      'alineacion' =>$request->input('alineacion'),
                      'simetria' =>$request->input('simetria'),
                      'espacidad' =>$request->input('espacidad'),
                      'cantidad_digitos' =>$request->input('cantidad_digitos'),
                      'superficie' =>$request->input('superficie'),
                      'densidad' =>$request->input('densidad'),
                      'modelo_descripcion' =>$request->input('observacion')
                   ]);
        $id_foto= DB::select("select max(id) from fotos"); 
                 foreach ($id_foto as $key) {
                   $id_chasis= $key->id;
                 }
        Plaqueta::create([
                      'id_foto' =>$request->input('foto'),
                      'ubicacion' =>$request->input('ubicacion_plaqueta'),
                      'material' =>$request->input('material_plaqueta'),
                      'tipo_grabado' =>$request->input('tipoGrabado_plaqueta'),
                      'tipo_remache' =>$request->input('tipoRemache_plaqueta'),
                      'informacion' =>$request->input('informacion_plaqueta'),
                      'observacion' =>$request->input('observacion_plaqueta')
                   ]);
        Serie::create([
                      'id_foto' =>$request->input('foto'),
                      'ubicacion' =>$request->input('ubicacion_serie'),
                      'tipo_grabado' =>$request->input('tipoGrabado_serie'),
                      'cantidad_digitos' =>$request->input('cantidadDigitos_Serie'),
                      'observacion' =>$request->input('observacion_serie')
                   ]);

  //SUBIR FOTO VEHIICULO
                    $archivo = $request->file('foto_vehiculo');
                    $input  = array('image' => $archivo) ;
                    $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif');
                    $validacion = Validator::make($input,  $reglas);
                    if ($validacion->fails()){
                         return response()->json(array('error_imagen'=>false));      
                        }else {
                        $nombre_original=$archivo->getClientOriginalName();
                        $extension=$archivo->getClientOriginalExtension();
                        $nuevo_nombre="vehiculo-".$nombre_original;
                        $r1=Storage::disk('Vehiculo')->put($nuevo_nombre,  \File::get($archivo) );
                        $rutadelvehiculo="fotos_vehiculos/".$nuevo_nombre;
                    if ($r1){
                    Vehiculo::create([
                      'id_chasis' =>$id_chasis,
                      'id_version' =>$request->input('tipo_grabado_M'),
                      'id_plaqueta' =>$request->input('alineacion_m'),
                      'id_motor' =>$request->input('simetria_m'),
                      'id_serie' =>$request->input('espacidad_m'),
                      'cilindraje' =>$request->input('cilindraje'),
                      'transmision' =>$request->input('transmision'),
                      'combustible' =>$request->input('combustible'),
                      'pais_origen' =>$request->input('pais_origen'),
                      'fotografia' => $rutadelvehiculo,
                      'anio' =>$request->input('anio'),
                      'casa_ensambladora' =>$request->input('casa_ensambladora')
                   ]);
                    }else{
                        return response()->json(array('error_imagen'=>true));
                    }
         
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
