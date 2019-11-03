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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Company
Route::get('/company', 'CompanyController@index')->name('company.index');
Route::get('/company/create', 'CompanyController@create')->name('company.create');
Route::post('/company', 'CompanyController@store')->name('company.store');
Route::get('/company/{company}', 'CompanyController@show')->name('company.show');
Route::get('/company/{company}/edit', 'CompanyController@edit')->name('company.edit');
Route::patch('/company/{company}', 'CompanyController@update')->name('company.update');
Route::delete('/company/{company}', 'CompanyController@destroy')->name('company.destroy');

// comment
Route::get('/comment', 'CommentController@index');
Route::get('/comment/create', 'CommentController@create');
Route::post('/comment', 'CommentController@store');
Route::get('/comment/{comment}', 'CommentController@show');
Route::get('/comment/{comment}/edit', 'CommentController@edit');
Route::patch('/comment/{comment}', 'CommentController@update');
Route::delete('/comment/{comment}', 'CommentController@destroy');

// request
Route::get('/request', 'RequestController@index');
Route::get('/request/create', 'RequestController@create');
Route::post('/request', 'RequestController@store');
Route::get('/request/{requests}', 'RequestController@show');
Route::get('/request/{requests}/edit', 'RequestController@edit');
Route::patch('/request/{requests}', 'RequestController@update');
Route::delete('/request/{requests}', 'RequestController@destroy');

// review
Route::get('/review', 'ReviewController@index');
Route::get('/review/create', 'ReviewController@create');
Route::post('/review', 'ReviewController@store');
Route::get('/review/{review}', 'ReviewController@show');
Route::get('/review/{review}/edit', 'ReviewController@edit');
Route::patch('/review/{review}', 'ReviewController@update');
Route::delete('/review/{review}', 'ReviewController@destroy');

// service
Route::get('/service', 'ServiceController@index');
Route::get('/service/create', 'ServiceController@create');
Route::post('/service', 'ServiceController@store');
Route::get('/service/{service}', 'ServiceController@show');
Route::get('/service/{service}/edit', 'ServiceController@edit');
Route::patch('/service/{service}', 'ServiceController@update');
Route::delete('/service/{service}', 'ServiceController@destroy');

// subscription
Route::get('/subscription', 'SubscriptionController@index');
Route::get('/subscription/create', 'SubscriptionController@create');
Route::post('/subscription', 'SubscriptionController@store');
Route::get('/subscription/{subscription}', 'SubscriptionController@show');
Route::get('/subscription/{subscription}/edit', 'SubscriptionController@edit');
Route::patch('/subscription/{subscription}', 'SubscriptionController@update');
Route::delete('/subscription/{subscription}', 'SubscriptionController@destroy');

// like
Route::get('/like', 'LikeController@index');
Route::get('/like/create', 'LikeController@create');
Route::post('/like', 'LikeController@store');
Route::get('/like/{like}', 'LikeController@show');
Route::get('/like/{like}/edit', 'LikeController@edit');
Route::patch('/like/{like}', 'LikeController@update');
Route::delete('/like/{like}', 'LikeController@destroy');

// album
Route::get('/album', 'AlbumController@index');
Route::get('/album/create', 'AlbumController@create');
Route::post('/album', 'AlbumController@store');
Route::get('/album/{album}', 'AlbumController@show');
Route::get('/album/{album}/edit', 'AlbumController@edit');
Route::patch('/album/{album}', 'AlbumController@update');
Route::delete('/album/{album}', 'AlbumController@destroy');

// image
Route::get('/image', 'ImageController@index');
Route::get('/image/create', 'ImageController@create');
Route::post('/image', 'ImageController@store');
Route::get('/image/{image}', 'ImageController@show');
Route::get('/image/{image}/edit', 'ImageController@edit');
Route::patch('/image/{image}', 'ImageController@update');
Route::delete('/image/{image}', 'ImageController@destroy');
