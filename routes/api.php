<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('/companies', 'CompanyApiController');
// Route::get('/companies', 'CompanyController@index');
// Route::get('/companies/create', 'CompanyApiController@create');
// Route::post('/companies', 'CompanyApiController@store');
// Route::get('/companies/{company}', 'CompanyApiController@show');
// Route::get('/companies/{company}/edit', 'CompanyApiController@edit');
// Route::delete('/companies/{company}', 'CompanyApiController@destroy');
// Route::patch('/companies/{company}', 'CompanyApiController@update');
// Route::get('/{any}', 'CompanyApiController@home')->where('any', '.*');