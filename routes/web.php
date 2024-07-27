<?php

use Illuminate\Support\Facades\Route;

#Route::get('/', function () {
 #   return view('welcome');
#});


#Route::resource('personas','App\Http\Controllers\PersonasController')->except('index','show');

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');

Route::resource('personas','App\Http\Controllers\PersonasController')
    ->names('personas')
   ->middleware('auth');
//Colocar la ruta completa para la version 8 en adelante
/*
Route::get('personas','App\Http\Controllers\PersonasController@personas')->name('personas');
Route::get('personas','App\Http\Controllers\PersonasController@index')->name('personas.index');
Route::get('personas/crear','App\Http\Controllers\PersonasController@create')->name('personas.create');
Route::get('personas/{persona}/editar','App\Http\Controllers\PersonasController@edit')->name('personas.edit');
Route::patch('personas/{persona}','App\Http\Controllers\PersonasController@update')->name('personas.update');
Route::post('personas','App\Http\Controllers\PersonasController@store')->name('personas.store');
Route::get('personas/{persona}','App\Http\Controllers\PersonasController@show')->name('personas.show');
Route::delete('personas/{persona}','App\Http\Controllers\PersonasController@destroy')->name('personas.destroy');
*/
Route::view('contacto','contacto')->name('contacto');
Route::post('contacto','App\Http\Controllers\ContactoController@store');


Auth::routes(['register' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');