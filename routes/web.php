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
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});


Route::get('/listtrees',['uses'=>'Derevo@listtrees','as'=>'listtrees']);
Route::get('/listfetus',['uses'=>'Derevo@listfetus','as'=>'listfetus']);
Route::get('/listquality',['uses'=>'Derevo@listquality','as'=>'listquality']);
Route::get('/orderby',['uses'=>'Derevo@orderby','as'=>'orderby']);
Route::get('/order', function () {
    return view('trees5');
}); 


Route::resource('/treescontrol', 'TreesController');
