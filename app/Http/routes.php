<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/' ,function(){
    return view('welcome');
});*/

Route::get('/','MakaleController@index');
Route::get('makale-ekle','MakaleController@yeniMakale');
Route::post('makale-ekle','MakaleController@makaleEkle');
Route::get('makale/{slug}','MakaleController@makaleDetay');
Route::get('makale-duzenle/{id}','MakaleController@makaleDuzenle');
Route::post('makaleGuncelle/{id}','MakaleController@makaleGuncelle');
Route::auth('/','MakaleController@index');

Route::get('/home', 'HomeController@index');
