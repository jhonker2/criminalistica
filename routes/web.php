<?php
use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','WelcomeController@index');

//Route::get('/admin/app','AdminController@index');

Route::group(['middleware' => ['web']], function () {
	Route::get('/admin/app', function () {
	if (Auth::guest()){
			 return view('Administrador/administrador');
    	}else{
    		 return Redirect::to('/admin/home');
    	}
    });

    Route::post('logeo',array('as'=>'login', 'uses'=>'LoginController@store'));
	Route::get('logout','LoginController@logout');

	/*Route::get('app', function(){
		return view('layouts.app');
	});*/
});

Route::get('/admin/home', 'HomeController@index');

//Route::post('/GET_modelos','WelcomeController@get_modelo');


//usuarios
Route::resource('/app/usuario','UsuarioControllers');
Route::get('/lista_usuarios','UsuarioControllers@lista');
Route::post('/usuario_contrasena/{id}','UsuarioControllers@actualizarContrsenaUsuarios');
Route::get('/app/usuarios', function(){
	return view('usuarios.GestionUsuarios');
});

// versiones
Route::resource('/app/versione','VersionesControllers');
Route::get('/lista_versione','VersionesControllers@lista');
//fin versiones

// Modelos
Route::resource('/app/modelo','ModeloController');
Route::get('/lista_modelo','ModeloController@lista');
//fin Modelos

// marcas
Route::resource('/app/marca','MarcaController');
Route::get('/lista_marca','MarcaController@lista');
//fin marcas

// vehiculo
Route::resource('/app/vehiculo','VehiculoController');
Route::get('/lista_vehiculo','VehiculoController@lista');
//fin vehiculo


/////////////////////////////////////
Route::get('GET_modelos', function(){
	 $id_marca= Input::get('marca_id');
    $modelos = \App\Modelo::where('id_marca','=',$id_marca)->get();
    return Response::json($modelos);
});
Route::get('GET_versiones', function(){
	 $id_modelo= Input::get('modelo_id');
    $versiones = \App\Versione::where('id_modelo','=',$id_modelo)->get();
    return Response::json($versiones);
});