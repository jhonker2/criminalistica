<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Marca;

use DB;
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $marca = Marca::all();
        return view('welcome',compact("marca"));
    }

    public function buscar_vehiculo(Request $request){
        $vehiculo = DB::table("vehiculos")->where('id_version',$request->input("id_version"))->get();
        return $vehiculo;
    }
    public function buscar_marca($id){
      $marca = DB::table("marcas")->where('id',$id)->get();
            return $marca;   
    }
    
    public function buscar_info_motor($id){
        $infoM = DB::table("motores")->where('id',$id)->get();

        return $infoM;
    }
    public function buscar_galeria(Request $request){
        $fotoM="";
        $fotoC="";
        $fotoP="";
        $fotoS="";
        $fot_motor      = DB::select("select f.foto from fotos f ,motores m  where m.id_foto=f.id and m.id=$request->id_motor");
        $fot_chasis     = DB::select("select f.foto from fotos f ,chasis c  where c.id_foto=f.id and c.id=$request->id_chasis");
        $fot_plaqueta   = DB::select("select f.foto from fotos f ,plaquetas p  where p.id_foto=f.id and p.id=$request->id_plaqueta");
        $fot_serie      = DB::select("select f.foto from fotos f ,series s  where s.id_foto=f.id and s.id=$request->id_serie");
        
        foreach($fot_motor as $f){$fotoM = $f->foto;}
        foreach($fot_chasis as $f){$fotoC = $f->foto;}
        foreach($fot_plaqueta as $f){$fotoP = $f->foto;}
        foreach($fot_serie as $f){$fotoS = $f->foto;}
    
        return response()->json(["fotoMotor"=>$fotoM,"fotoChasis"=>$fotoC,"fotoPlaqueta"=>$fotoP,"fotoSerie"=>$fotoS]);
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
        //
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
