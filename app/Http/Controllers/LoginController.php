<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Session;

use DB;

use Redirect;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $tu;
        $tipo_usuario= DB::select("select tipo_usuario from users where email=?",[$request->usuario]);
        foreach ($tipo_usuario as $v) {
            $tu = $v->tipo_usuario;
        }
        if($tu=="Administrador"){
            if(Auth::attempt(['email'=>$request['usuario'],'password'=>$request['clave']]) ) {
                    return response()->json(["sms"=>"login" ]);
            }else{
                    return response()->json(["sms"=>"error"]);
            }  
        }else{
                    return response()->json(["sms"=>"privilegio"]);
        }
    }

    public function loginInvitados(Request $request){
        $usu;$pass;
        $usuario = DB::select("select email from users where email=?",[$request->usuario]);
        if($usuario==[]){
            return response()->json(["sms"=>"errorUsuario"]);
        }else{
            foreach ($usuario as $u) {
                $usu = $u->email;
            }    

            if(Auth::attempt(['email'=>$usu,'password'=>$request['clave']]) ) {
                    return response()->json(["sms"=>"login" ]);
            }else{
                    return response()->json(["sms"=>"error"]);
            }  

        }
    }

    public function logout_invitados(){
        Auth::logout();
        return Redirect::to('/');
    }

     public function logout(){
        Auth::logout();
        return Redirect::to('/admin/app');
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
