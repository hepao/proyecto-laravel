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

Route::get('index','AdministradorController@index');
Route::get('/',function(){
    return "pepe";
});
*/


Route::get('Administrador/index',["as"=>"route.index","uses"=>"AdministradorController@index"]);

/*
 * Route::get('admin', 'AdminController@index')->name('home.admin');
 */
