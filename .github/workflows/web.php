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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

/*20 - Criando o Controlador 23102019*/
Route::get('produtos', 'MeuControlador@produtos');
Route::get('nome', 'MeuControlador@getNome');
Route::get('idade', 'MeuControlador@getIdade');
Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

/*Criação de controladores para exemplo - 24/10/2019

 * Importante criar os controladores com resource.
 *  */

Route::resource('clientes', 'ClienteControlador');

