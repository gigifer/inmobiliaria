<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('avisos', 'avisosController')->middleware('auth');

Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::post('controladorContacto', 'EmailsController@recieveData')->name('controladorContacto');

Route::view('/contactoVista', 'contactoVista');

Route:: get('/', 'CatalogoController@index');

Route::get('/detalleAviso/{id}', [
    'as'=>'aviso-detalle',
    'uses'=>'catalogoController@show']);

Route::get('/ventaRuta', 'CatalogoController@venta');

Route::get('/temporarioRuta', 'CatalogoController@temporario');
