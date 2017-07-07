<?php

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

Route::get('/', function () {
    return view('welcome');
});

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
