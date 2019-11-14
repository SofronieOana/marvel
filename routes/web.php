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

Route::get('', function () {
    return view('index');
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/theater', function () {
	return view('theater');
});


Route::get('/signup','PagesController@signup');
Route::post('signup', 'PagesController@store');
Route::get('/login', 'PagesController@showLogin');
Route::post('/login', 'PagesController@login');
Route::get('/logout', 'PagesController@logout');


Route::resource('members', 'MembersController');
Route::get('members/create','MembersController@create');
Route::get('members/show/{id}','MembersController@show');
Route::delete('members/{member}','MembersController@destroy')->name('members.members');

Route::resource('movies', 'MoviesController');
Route::get('movies/create','MoviesController@create');
Route::get('movies/show/{id}','MoviesController@show');
Route::delete('movies/{movie}','MoviesController@destroy')->name('movies.movies');

Route::get('/', 'ViewMoviesController@index');
Route::get('/showMovie/{id}', 'ViewMoviesController@showMovie');
Route::get('/showMovie/review', 'ViewMoviesController@create');
Route::post('showMovie/{id}', 'ViewMoviesController@store');




Route::resource('movies_theaters', 'MoviesTheatersController');
Route::get('movies_theaters/create','MoviesTheatersController@create');
Route::get('movies_theaters/show/{id}','MoviesTheatersController@show');
Route::delete('movies_theaters/{movie_theater}','MoviesTheatersController@destroy')->name('movies_theaters.movies_theaters');


Route::resource('reviews', 'ReviewsController');
Route::get('reviews/create','ReviewsController@create');
Route::get('reviews/show/{user_id}','ReviewsController@show');
Route::delete('reviews/{review}','ReviewsController@destroy')->name('reviews.reviews');
