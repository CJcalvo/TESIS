<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|


Route::get('/consultaE/{id}', 'InformeController@show')->name('vinforme.show');


| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::resource('user', 'UserController')
->parameters(['usuario' => 'usuario'])
->names('vusuario');


*/
Route::get('/l', function () {
    return view('log');
});



Route::view('/eval', 'Inicio.index')->name('prueba');
Route::view('/inicio', 'Inicio.pregguntas')->name('preguntas');
Route::view('/md', 'misDT')->name('misDatos');
Route::view('/calendario', 'calendario')->name('calendario');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuario', 'HomeController@getUser')->name('usuario');


Route::get('/consulta', 'UserController@index')->name('vusuario.index');
Route::get('/crear', 'UserController@create')->name('vusuario.create');
Route::post('/home', 'UserController@store')->name('vusuario.store');
Route::put('/{usuario}/update', 'UserController@update')->name('vusuario.update');



Route::get('/evaluacionA', 'EvaluacionController@index')->name('vevaluacion.index');
Route::get('/evaluacionE/{id}', 'EvaluacionController@show')->name('vevaluacion.show');



Route::get('/informe', 'InformeController@index')->name('vinforme.index');
Route::get('/{id}', 'InformeController@show')->name('vinforme.show');
Route::get('/{id}/MD', 'InformeController@showIndividual')->name('vinforme.showIndividual');



Route::get('/', function () {
    return view('welcome');
});


Route::get('/pru', 'UserController@papu');


//rutas de sandra
route::resource('competencia', App\Http\Controllers\CompetenciaController::class)
        ->parameters(['competencia' => 'competencia'])
        ->names('competencia');

route::resource('asignatura', App\Http\Controllers\AsignaturaController::class)
        ->parameters(['asignatura' => 'asignatura'])
        ->names('asignatura');

route::resource('facultad', App\Http\Controllers\FacultadController::class)
        ->parameters(['facultad' => 'facultad'])
        ->names('facultad');

route::resource('programa', App\Http\Controllers\ProgramaController::class)
        ->parameters(['programa' => 'programa'])
        ->names('programa');

route::resource('pregunta', App\Http\Controllers\PreguntaController::class)
       ->parameters(['pregunta' => 'pregunta'])
       ->names('pregunta');
       Route::get('pregunta/upload', [App\Http\Controllers\PreguntaController::class, 'upload'])->name('pregunta.upload');
       Route::post('/pregunta/import-file', [App\Http\Controllers\PreguntaController::class, 'importFile'])->name('pregunta.importFile');

route::resource('tema', App\Http\Controllers\TemaController::class)
       ->parameters(['tema' => 'tema'])
       ->names('tema');
