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
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@authenticate');
Route::get('logout', 'LoginController@logout');
Route::get('/', 'LoginController@index');
Route::get('home', 'HomeController@index');
Route::get('chart', 'ChartsController@index');

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');

// Route::group(['prefix' => 'admin', 'middleware' => array('auth','admin'), 'namespace' => 'Admin'], function (){
// 		Route::get('/', function()
// 		{
// 			return View('homeadmin');
//	
Route::resource('users', 'UserController');//สมัคร

// Route::middleware('auth')->group(function () {
//     // Route::resource('user', 'Admin\UsersController');
    

//  });	