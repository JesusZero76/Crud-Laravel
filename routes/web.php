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

Route::get('/form','App\Http\Controllers\PersonaController@ingreso');
Route::post('/guardar','App\Http\Controllers\PersonaController@guardar')->name('guardar');
Route::get('/modificar/{id}','App\Http\Controllers\PersonaController@modificar')->name('modificar');
Route::patch('/editar/{id}','App\Http\Controllers\PersonaController@editar')->name('editar');
Route::delete('/delete/{id}','App\Http\Controllers\PersonaController@delete')->name('delete');
Route::get('/listar','App\Http\Controllers\PersonaController@list');
Route::get('/impresion','App\Http\Controllers\PersonaController@impresion');
 