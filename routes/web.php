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
    return view('index',['colorHeader' => 'notblack']);
});

Route::get('activitee', function () {return view('activite',['colorHeader' => 'black']);});
Route::get('details', function () {return view('details',['colorHeader' => 'black']);});

