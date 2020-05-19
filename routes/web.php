<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PrimeiroMiddleware;
use App\Http\Middleware\SegundoMiddleware;

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

Route::get('/usuarios', 'UsuarioControlador@index')->middleware('primeiro', 'segundo');

Route::get('/', function() {
	return 'teste';
});

Route::get('/terceiro', function(){
	return 'Passou pelo terceiro middleware';
})->middleware('terceiro:joao,20');