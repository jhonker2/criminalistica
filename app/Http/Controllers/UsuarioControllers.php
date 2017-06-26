<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use DB;
use Auth;
class UsuarioControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Usuarios = User::All();
         return view('usuarios.GestionUsuarios',compact('Usuarios'));

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

        //return $request->all();
        User::create(['name'          =>$request->input('nombre'),
                      'email'         =>$request->input('usuario'),
                      'password'      =>bcrypt($request->input('password')),
                      'tipousuario'   =>$request->input('tipoUsuario'),
                            ]);
        return response()->json(["registro"=>true]);
    }

    public function lista()
    {
     $Usuarios = User::all();
     return view('usuarios.TablaUsuarios',compact("Usuarios"));
    }


    public function actualizarContrsenaUsuarios(Request $request,$id){

            $cambiarContrasena=DB::update("update users set name=?,email=?,password=?,tipousuario=? where id=?",
            [$request->input('nombre'),$request->input('user'),bcrypt($request->input('password')),$request->input('tipoUsuario'),$id]);

        if($cambiarContrasena==1){
                return response()->json(["sms"=>"ok" ]);
             }else{
                return response()->json(["sms"=>"error" ]);
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
      $Usuarios = User::find($id);
      return response()->json($Usuarios->toArray());
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
       $Usuarios = User::find($id);
        $Usuarios->fill($request->all());
        $Usuarios->save();
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
        $Usuarios = User::find($id);
        $Usuarios = $Usuarios->delete();
        return response()->json([
            "sms"=>"ok" 
            ]);
    }
}
