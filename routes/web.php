<!-- <?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/{user}', 'HomeController@show');
// Route::get('/{user}/edit', 'HomeController@edit');
// Route::patch('/{user}', 'HomeController@update');
// Route::delete('/{user}', 'HomeController@destroy');
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

Route::get('/', 'CompanyApiController@home');

Route::get('/companies', 'CompanyApiController@index');
Route::get('/companies/create', 'CompanyApiController@create');
Route::post('/companies', 'CompanyApiController@store');
Route::get('/companies/{company}', 'CompanyApiController@show');
Route::get('/companies/{company}/edit', 'CompanyApiController@edit');
Route::delete('/companies/{company}', 'CompanyApiController@destroy');
Route::patch('/companies/{company}', 'CompanyApiController@update');
Route::get('/{any}', 'CompanyApiController@home')->where('any', '.*');

// Company
// Route::resource('/company', 'CompanyController');
// Route::get('/company', 'CompanyController@index')->name('company.index');
// Route::get('/company/create', 'CompanyController@create')->name('company.create');
// Route::post('/company', 'CompanyController@store')->name('company.store');
// Route::get('/company/{company}', 'CompanyController@show')->name('company.show');
// Route::get('/company/{company}/edit', 'CompanyController@edit')->name('company.edit');
// Route::patch('/company/{company}', 'CompanyController@update')->name('company.update');
// Route::delete('/company/{company}', 'CompanyController@destroy')->name('company.destroy');

// // comment
// Route::get('/comment', 'CommentController@index')->name('comment.index');
// Route::get('/comment/create', 'CommentController@create')->name('comment.create');
// Route::post('/comment', 'CommentController@store')->name('comment.store');
// Route::get('/comment/{comment}', 'CommentController@show')->name('comment.show');
// Route::get('/comment/{comment}/edit', 'CommentController@edit')->name('comment.edit');
// Route::patch('/comment/{comment}', 'CommentController@update')->name('comment.update');
// Route::delete('/comment/{comment}', 'CommentController@destroy')->name('comment.destroy');

// // request
// Route::get('/request', 'MakeRequestController@index')->name('request.index');
// Route::get('/request/create', 'MakeRequestController@create')->name('request.create');
// Route::post('/request', 'MakeRequestController@store')->name('request.store');
// Route::get('/request/{makeRequest}', 'MakeRequestController@show')->name('request.show');
// Route::get('/request/{makeRequest}/edit', 'MakeRequestController@edit')->name('request.edit');
// Route::patch('/request/{makeRequest}', 'MakeRequestController@update')->name('request.update');
// Route::delete('/request/{makeRequest}', 'MakeRequestController@destroy')->name('request.destroy');

// // review
// Route::get('/review', 'ReviewController@index')->name('review.index');
// Route::get('/review/create', 'ReviewController@create')->name('review.create');
// Route::post('/review', 'ReviewController@store')->name('review.store');
// Route::get('/review/{review}', 'ReviewController@show')->name('review.show');
// Route::get('/review/{review}/edit', 'ReviewController@edit')->name('review.edit');
// Route::patch('/review/{review}', 'ReviewController@update')->name('review.update');
// Route::delete('/review/{review}', 'ReviewController@destroy')->name('review.destroy');

// // service
// Route::get('/service', 'ServiceController@index')->name('service.index');
// Route::get('/service/create', 'ServiceController@create')->name('service.create');
// Route::post('/service', 'ServiceController@store')->name('service.store');
// Route::get('/service/{service}', 'ServiceController@show')->name('service.show');
// Route::get('/service/{service}/edit', 'ServiceController@edit')->name('service.edit');
// Route::patch('/service/{service}', 'ServiceController@update')->name('service.update');
// Route::delete('/service/{service}', 'ServiceController@destroy')->name('service.destroy');

// // subscription
// Route::get('/subscription', 'SubscriptionController@index')->name('subscription.index');
// Route::get('/subscription/create', 'SubscriptionController@create')->name('subscription.create');
// Route::post('/subscription', 'SubscriptionController@store')->name('subscription.store');
// Route::get('/subscription/{subscription}', 'SubscriptionController@show')->name('subscription.show');
// Route::get('/subscription/{subscription}/edit', 'SubscriptionController@edit')->name('subscription.edit');
// Route::patch('/subscription/{subscription}', 'SubscriptionController@update')->name('subscription.update');
// Route::delete('/subscription/{subscription}', 'SubscriptionController@destroy')->name('subscription.destroy');

// // like
// Route::get('/like', 'LikeController@index')->name('like.index');
// Route::get('/like/create', 'LikeController@create')->name('like.create');
// Route::post('/like', 'LikeController@store')->name('like.store');
// Route::get('/like/{like}', 'LikeController@show')->name('like.show');
// Route::get('/like/{like}/edit', 'LikeController@edit')->name('like.edit');
// Route::patch('/like/{like}', 'LikeController@update')->name('like.update');
// Route::delete('/like/{like}', 'LikeController@destroy')->name('like.destroy');

// // album
// Route::get('/album', 'AlbumController@index')->name('album.index');
// Route::get('/album/create', 'AlbumController@create')->name('album.create');
// Route::post('/album', 'AlbumController@store')->name('album.store');
// Route::get('/album/{album}', 'AlbumController@show')->name('album.show');
// Route::get('/album/{album}/edit', 'AlbumController@edit')->name('album.edit');
// Route::patch('/album/{album}', 'AlbumController@update')->name('album.update');
// Route::delete('/album/{album}', 'AlbumController@destroy')->name('album.destroy');

// // image
// Route::get('/image', 'ImageController@index')->name('image.index');
// Route::get('/image/create', 'ImageController@create')->name('image.create');
// Route::post('/image', 'ImageController@store')->name('image.store');
// Route::get('/image/{image}', 'ImageController@show')->name('image.show');
// Route::get('/image/{image}/edit', 'ImageController@edit')->name('image.edit');
// Route::patch('/image/{image}', 'ImageController@update')->name('image.update');
// Route::delete('/image/{image}', 'ImageController@destroy')->name('image.destroy');
