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

Route::get('testmodel2', function () {
    $a = App\produk::all();
    return $a;
});

Route::get('testmodel3', function () {
    $b = App\pengguna::all();
    return $b;
});

Route::get('testmodel4', function () {
    $c = App\pengaturan::all();
    return $c;
});