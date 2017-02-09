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


//mastch --recibe tanto get como post
Route::match(['get','post'],'home/form','HomeController@form');
Route::match(['get','post'],'home/vista','HomeController@con');


Route::match(['get','post'],'home/suma','SumController@suma');

Route::match(['post','get','put'],"home/nombre/{nombre}",function($nombre){

	return "El valor de gumento nombres es ".$nombre;
})->where(["nombre"=>"[a-zA-Z]+"]);

Route::match(['post','get','put'],"home/nombre2/{nombre}/apellido/{apellido}",function($nombre,$apellido){

	return "El valor de gumento nombres es ".$nombre." apellido ".$apellido;
})->where(["nombre"=>"[a-zA-Z]+","apellido"=>"[a-zA-Z]+"]);



Route::get('inicio/miformulario','HomeController@miformulario');
Route::post('inicio/validarmiformulario','HomeController@validarmiformulario');


