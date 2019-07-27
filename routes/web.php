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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('default');
});
Auth::routes();

Route::get('/accueil', 'HomeController@index')->name('accueil');

Route::get('/agrements/tableagrement', 'AgrementController@index')->name('agrements.tableagrement');
Route::get('/prestataires/tableprestataire', 'PrestataireController@index')->name('prestataires.tableprestataire');

Route::resource('agrements', 'AgrementController');
