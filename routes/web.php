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
    return view('welcome');
});

Route::get('testmodel', function () {
    $q = App\post::all();
    $a = App\produk::all();
    $b = App\pengguna::all();
    $c = App\pengaturan::all();
    return $q."</br></br>".$a."</br></br>".$b."</br></br>".$c;
});

Route::get('/test ','Mycontroller@percobaan');
Route::get('/test2','Mycontroller@percobaan2');
Route::get('/test3','Mycontroller@percobaan3');
Route::get('/test4','Mycontroller@percobaan4');
Route::get('/test5','Mycontroller@percobaan5');
Route::get('/test6','Mycontroller@percobaan6');
Route::get('test7/{data?}/{data2?}','Mycontroller@percobaan7');

Route::get('/coba','SiswaController@percobaan');
Route::get('/coba2/{a}','SiswaController@percobaan2');
