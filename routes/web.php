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

// Landing Page Routes
Route::get('/', [
	'uses' => 'Landing@index',
	'as' => 'home.index',
	'middleware' => ['guest']
]);

Route::post('/', 'Landing@storeMessage');


////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////


// Authentication Routes
Auth::routes();


////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////


// User Area Routes
Route::get('/home', [
	'uses' => 'HomeController@index',
	'as' => 'userArea.index'
	// 'middleware' => ['App\Http\Middleware\User']
]);

Route::get('/contact', [
	'uses' => 'HomeController@contact',
	'as' => 'contact.index',
	'middleware' => ['auth', 'App\Http\Middleware\User']
]);

Route::post('/contact', [
	'uses' => 'HomeController@storecontact',
	'as' => 'contact.post',
	'middleware' => ['auth', 'App\Http\Middleware\User']
]);

Route::get('/services', [
	'uses' => 'ServicesController@index',
	'as' => 'services.index',
	'middleware' => ['auth', 'App\Http\Middleware\User']
]);

Route::get('/logs', [
	'uses' => 'ServicesController@logs',
	'as' => 'services.logs',
	'middleware' => ['auth', 'App\Http\Middleware\User']
]);

Route::post('/rate', [
	'uses' => 'ServicesController@update',
	'as' => 'services.rate',
	'middleware' => ['auth', 'App\Http\Middleware\User']
]);

Route::get('/services/{id}', [
	'uses' => 'ServicesController@create',
	'as' => 'services.create',
	'middleware' => ['auth', 'App\Http\Middleware\User']
]);

Route::post('/services', [
	'uses' => 'ServicesController@store',
	'as' => 'services.post',
	'middleware' => ['auth', 'App\Http\Middleware\User']
]);

Route::post('/confirm', [
	'uses' => 'ServicesController@confirm',
	'as' => 'services.confirm',
	'middleware' => ['auth', 'App\Http\Middleware\User']
]);

Route::get('/signout', [
	'uses' => 'HomeController@signout',
	'as' => 'userArea.signout',
	'middleware' => ['auth']
]);

Route::get('/tester', [
	'uses' => 'ServicesController@tester',
	'as' => 'session.testing',
	'middleware' => ['auth']
]);

Route::get('/confirm', [
	'uses' => 'ServicesController@confirm',
	'as' => 'service.confirm',
	'middleware' => ['auth']
]);

////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////


// Admin Area Routes
Route::get('/superuser', [
	'uses' => 'AdminController@index',
	'as' => 'admin.index',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);

Route::get('/users', [
	'uses' => 'AdminController@users',
	'as' => 'admin.users',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);

Route::get('/recruits', [
	'uses' => 'AdminController@recruits',
	'as' => 'admin.recruits',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);

Route::get('/add', [
	'uses' => 'AdminController@addRecruit',
	'as' => 'recruits.add',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);

Route::post('/add', [
	'uses' => 'AdminController@storeRecruit',
	'as' => 'recruits.store',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);


Route::get('/deleterecruit/{id}', [
	'uses' => 'AdminController@deleteRecruit',
	'as' => 'recruits.drop',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);



Route::post('/updaterecruit', [
	'uses' => 'AdminController@updateStoreRecruit',
	'as' => 'recruits.updatestore',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);

Route::get('/updaterecruit/{id}', [
	'uses' => 'AdminController@updateRecruit',
	'as' => 'recruits.update',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);



Route::get('/transactions', [
	'uses' => 'AdminController@transactions',
	'as' => 'admin.transactions',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);

Route::get('/transactions/{id}', [
	'uses' => 'AdminController@updateTransaction',
	'as' => 'admin.updateTransaction',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);

Route::get('/messages', [
	'uses' => 'AdminController@messages',
	'as' => 'admin.messages',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);

Route::get('/messages/{id}', [
	'uses' => 'AdminController@updateMessages',
	'as' => 'admin.updateMessages',
	'middleware' => ['auth', 'App\Http\Middleware\Admin']
]);

////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////

