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

