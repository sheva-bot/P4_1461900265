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

Route::get('/buku', 'App\Http\Controllers\BukuController@index');
Route::get('/buku/export_excel', 'App\Http\Controllers\BukuController@export_excel');

Route::get('/index', function () {
    return view('index0271');
});
Route::get('/index','App\Http\Controllers\MainControll@index');

Route::get('/databuku', function () {
    return view('databuku0265');
});
Route::get('/databuku','App\Http\Controllers\MainControll@databuku');

Route::get('/rakbuku', function () {
    return view('rakbuku0265');
});
Route::get('/rakbuku','App\Http\Controllers\MainControll@rakbuku');

Route::get('/datatransaksi', function () {
    return view('datatransaksi0271');
});
Route::get('/datatransaksi','App\Http\Controllers\MainControll@datatransaksi');

Route::get('/datauser', function () {
    return view('datauser0271');
});
Route::get('/datauser','App\Http\Controllers\MainControll@datauser');