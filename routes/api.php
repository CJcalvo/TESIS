<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get( '/usuarios/{id}/programas' , 'Programa_AsignaturaController@byUser');
