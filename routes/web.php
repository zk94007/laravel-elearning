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

Route::get('/','Controller@start');
Route::get('/zb1/0', 'Controller@start');
Route::get('/zb1/end', 'Controller@end');
Route::post('/{msid}/{id}', 'Controller@show');
