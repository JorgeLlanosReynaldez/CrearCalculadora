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

//calculadora 
//suma

Route::get('calculadora', 'calController@calculadora');

Route::post('solucioncal', ['as' => 'calculadora.solucioncal', 'uses' => 'calController@solucioncal']);

//resta
Route::get('calculadora', 'restaController@calculadora');

Route::post('resta', ['as' => 'calculadora.resta', 'uses' => 'restaController@resta']);

//division
Route::get('calculadora', 'divisionController@calculadora');

Route::post('division', ['as' => 'calculadora.division', 'uses' => 'divisionController@division']);
 
//multiplicacion

Route::get('calculadora', 'multiController@calculadora');

Route::post('multi', ['as' => 'calculadora.multi', 'uses' => 'multiController@multi']);

//potencia

Route::get('calculadora', 'potController@calculadora');

Route::post('pot', ['as' => 'calculadora.pot', 'uses' => 'potController@pot']);


