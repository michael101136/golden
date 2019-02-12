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
Route::get('logout',['as' =>'logout','uses' => 'Auth\LoginController@logout']);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tours','ToursController');
Route::post('tours/cargar/', [ 'uses' => 'ToursController@cargarImagens' ])->name('CargarImagenTour');
Route::post('tours/updateTours/', [ 'uses' => 'ToursController@updateTourCampos' ])->name('updateTours');
Route::post('tours/categoria/TourUpdateCategoria', [ 'uses' => 'ToursController@TourUpdateCategoria' ])->name('TourUpdateCategoria');
Route::get('tour/listar/{id?}', [ 'uses' => 'ToursController@listarImagenesToursUpdate' ])->name('listarImagenesToursUpdate');
// Route::post('updateImagenTours' , ['as'=>'updateImagenTours','uses'=>'ToursController@updateImagenTours']);

Route::resource('users','UsersController');
Route::resource('categories','CategorieController');
Route::resource('multimedia','MultimediaController');
Route::resource('imagen','ImageController');
Route::get('image/listar/{id?}', [ 'uses' => 'ImageController@listarImagenes' ])->name('listarImagenes');
Route::get('image/delete/{id?}',[ 'uses' => 'ImageController@delete_img' ])->name('EliminarImagenes');




// Route::post('image/create/','MultimediaController@create_img');
// Route::get('image/view/{id}','MultimediaController@view_img');
// Route::post('image/delete/{id}','MultimediaController@delete_img');
// Route::get('video/view/{id}','MultimediaController@view_video');
// Route::post('video/create/{id}','MultimediaController@create_video');
// Route::get('video/see/{id}','MultimediaController@see_video');
// Route::put('video/update/{id}','MultimediaController@update_video');
// Route::post('video/delete/{id}','MultimediaController@delete_video');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
