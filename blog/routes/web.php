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

/*
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



Route::get('home/miformulario','HomeController@miformulario');
Route::post('home/validarmiformulario','HomeController@validarmiformulario');

Route::group(['prefix'=>'apodo'],function(){
	Route::get('nombre/{nombre?}',function($nombre='vacio'){
			
			return "hola ".$nombre;

	});

		Route::get('nombre2/{nombre}',function($nombre2='vacio'){
			
			return "hola =  ".$nombre2;

	});



});



Route::get('ruta/{numero?}','TestController@view');	
//----------------------CodigoFacilito----------------------	
*/
//-----------------admin---------------------------------------

Route::group(['prefix'=>'admin'],function(){

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',['uses'=>'UsersController@destroy',
									'as'=>'admin.users.destroy'
									]);


	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy',['uses' => 'CategoriesController@destroy',
				'as'=>  'admin.categories.destroy'

		]);

});
