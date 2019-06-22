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

//Route::get('Administrador/index','AdministradorController@index');
//Route::get('Administrador/perfil','AdministradorController@perfil');


Route::get('Administrador/perfil', ["as"=>"Administrador.perfil", "uses"=>"AdministradorController@perfil"]);
/*
Route::get('administrador/edit/{id}', ["as"=>"administrador.edit", "uses"=>"AdministradorController@edit"]);
//update
Route::put('administrador/{id}', ["as"=>"administrador.update", "uses"=>"AdministradorController@update"]);
Route::delete('Administrador/eliminar/{id}', ["as"=>"administrador.destroy", "uses"=>"AdministradorController@destroy"]);*/