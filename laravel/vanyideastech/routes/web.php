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

/* 
//Routes without Controller
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
}); */
/* Basic Website */
/* Pages */
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/projects', 'PagesController@projects');
Route::get('/contact', 'PagesController@contact');
Route::get('/messages', 'MessagesController@getMessages');
Route::get('/messages', 'MessagesController@getMessages');
Route::get('/poetry', 'PagesController@poetry');
Route::get('/services', 'PagesController@services');
Route::get('/adminlogin', 'PagesController@adminlogin');
/* Form submit */
Route::post('/contact/submit', 'MessagesController@submit');

/* From Basic web to Photo gallery */
Route::get('/albums', 'PagesController@albums');

/* Start Photo Gallery */
/* Album */
Route::get('/albums', 'AlbumsController@index');
Route::get('/create', 'AlbumsController@create');
Route::post('/albums/store', 'AlbumsController@store');
Route::get('/albums/{id}', 'AlbumsController@show');

/* Photos */
Route::get('/photos/create/{id}', 'PhotosController@create');
Route::post('/photos/store', 'PhotosController@store');
Route::get('/photos/{id}', 'PhotosController@show');
Route::delete('/photos/{id}', 'PhotosController@destroy');

/* End Photo Gallery */

/* Posts */
Route::get('/posts', 'PagesController@posts');


Route::resource('posts', 'PostsController');


/* Created: php artisan make:auth > yes */
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
