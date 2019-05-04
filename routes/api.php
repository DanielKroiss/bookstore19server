<?php

//use Illuminate\Http\Request;
//
//
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//
//
//Route::get('books', 'BookController@index');
//Route::get('book/{isbn}', 'BookController@findByISBN');
//Route::get('book/checkisbn/{isbn}', 'BookController@checkISBN');
//Route::get('book/search/{searchterm}', 'BookController@findBySearchterm');
//
//Route::group(['middleware' =>['api', 'cors', 'jwt.auth']], function (){
//    Route::post('book', 'BookController@save');
//    Route::put('book/{isbn}', 'BookController@update');
//    Route::delete('book/{isbn}', 'BookController@delete');
//    Route::post('auth/logout', 'Auth\ApiAuthController@logout');
//});
//
//
//
//
//Route::group(['middleware' =>['api', 'cors']], function (){
//    Route::post('auth/login', 'Auth\ApiAuthController@login');
//});


//use Illuminate\Http\Request;
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
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::get('books', 'BooksController@index');
//Route::get('book/{isbn}', 'BooksController@findByISBN');
//Route::get('book/checkisbn/{isbn}', 'BooksController@checkISBN');
//Route::get('books/search/{searchTerm}', 'BooksController@findBySearchTerm');
////Route::post('book', 'BooksController@save');
////Route::put('book/{isbn}', 'BooksController@update');
////Route::delete('book/{isbn}', 'BooksController@delete');
//Route::post('auth/login', 'Auth\ApiAuthController@login');
//Route::group(['middleware' => ['api','cors','jwt.auth']], function () {
//    Route::post('book', 'BooksController@save');
//    Route::put('book/{isbn}', 'BooksController@update');
//    Route::delete('book/{isbn}', 'BooksController@delete');
//    Route::post('auth/logout', 'Auth\ApiAuthController@logout');
//});



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



Route::get('orders', 'OrderController@index');
Route::get('books', 'BookController@index');
Route::get('book/{isbn}', 'BookController@findByISBN');
Route::get('book/checkisbn/{isbn}', 'BookController@checkISBN');
Route::get('book/search/{searchTerm}', 'BookController@findBySearchTerm');
Route::get('author/search/{searchTerm}', 'AuthorController@findBySearchTerm');


Route::group(['middleware' => ['api', 'cors', 'jwt.auth']], function () {
    Route::post('book', 'BookController@save');
    Route::post('order', 'OrderController@save');
    Route::put('order/{id}', 'OrderController@updatestate');
    Route::put('book/{isbn}', 'BookController@update');
    Route::delete('book/{isbn}', 'BookController@delete');
    Route::post('auth/logout', 'Auth\ApiAuthController@logout');
});


Route::group(['middleware' => ['api', 'cors']], function () {
    Route::post('auth/login', 'Auth\ApiAuthController@login');
});
