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

Route::redirect('/','/en');

Route::group(['prefix' => '{language}'], function (){
	Route::get('/',['uses'=>'ajaxController@index']);
	Route::get('/activitee/{ville_id}/{type_id}',['uses'=>'ajaxController@activites']);
	Route::get('/details/{id}',['uses'=>'ajaxController@details']);
	Route::get('reservation', function () {return view('reservation',['colorHeader' => 'black']);});
});
	





