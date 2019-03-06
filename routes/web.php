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
    return redirect('/es');
});
// // Route::get('/es', function () {
// //     return view('assets.pagina.es.inicio');
// // });




/*_______________ Admin _____________________________________________________________________________________________________________*/
Route::get('logout',['as' =>'logout','uses' => 'Auth\LoginController@logout']);


Route::resource('tours','ToursController');
Route:: get('create/tours/{tourOpcion?}', [

		'uses' => 'ToursController@createTour',
		'as' => 'tours.create'
	
]);
Route::post('tours/cargar/', [ 'uses' => 'ToursController@cargarImagens' ])->name('CargarImagenTour');
Route::post('tours/updateTours/', [ 'uses' => 'ToursController@updateTourCampos' ])->name('updateTours');
Route::post('tours/categoria/TourUpdateCategoria', [ 'uses' => 'ToursController@TourUpdateCategoria' ])->name('TourUpdateCategoria');
Route::get('tour/listar/{id?}', [ 'uses' => 'ToursController@listarImagenesToursUpdate' ])->name('listarImagenesToursUpdate');
Route::post('updateImagenTours' , ['as'=>'updateImagenTours','uses'=>'ToursController@updateImagenTours']);

Route::resource('users','UsersController');
Route::resource('categories','CategorieController');
Route::resource('testimonio','TestimonioController');
Route:: get('testimonio/cambioestado/{id}', [

	'uses' => 'TestimonioController@cambioEstado',
	'as' => 'testimonio.estado'

]);


Route::resource('Itinerario','ItinerarioController');
Route::get('tour/createItinerario/{id?}', [ 'uses' => 'ItinerarioController@createItinerario' ])->name('createItinerario');
Route::post('tours/Itinerario/insertarItinerario', [ 'uses' => 'ItinerarioController@insertarItinerario' ])->name('insertarItinerario');
Route::get('tour/itinerario/{id?}', [ 'uses' => 'ItinerarioController@listarItinerarios' ])->name('listarItinerarios');
Route::get('tour/showItinerario/{id?}', [ 'uses' => 'ItinerarioController@showItinerario' ])->name('showItinerario');
Route::get('tour/deleteItinerario/{id?}',[ 'uses' => 'ItinerarioController@delete_itinerario' ])->name('delete_itinerario');
Route::post('tours/cargarImagenItinerario/', [ 'uses' => 'ItinerarioController@cargarImagenItinerario' ])->name('CargarImagenItinerario');
Route::post('tours/updateItinerario/', [ 'uses' => 'ItinerarioController@updateItinerario' ])->name('updateItinerario');
Route::post('tours/UpdateImagenItinerario/', [ 'uses' => 'ItinerarioController@UpdateImagenItinerario' ])->name('UpdateImagenItinerario');



Route::resource('multimedia','MultimediaController');
Route::resource('imagen','ImageController');
Route::get('image/listar/{id?}', [ 'uses' => 'ImageController@listarImagenes' ])->name('listarImagenes');
Route::get('image/delete/{id?}',[ 'uses' => 'ImageController@delete_img' ])->name('EliminarImagenes');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*_______________ Fin admin_____________________________________________________________________________________________________________*/

Route::get('/{idioma?}', [ 'uses' => 'PublicController@index' ]);
Route::get('{lang?}/paquetes/', [ 'uses' => 'PublicController@tours' ])->name('paquetesEs');
Route::get('{lang?}/tours/detalle/{slug?}', ['uses' => 'PublicController@tour'])->name('detalleEsTour');
Route::get('{lang?}/nosotros/', [ 'uses' => 'PublicController@about' ])->name('nosotrosEs');
Route::get('{lang?}/contacto/', [ 'uses' => 'PublicController@contact' ])->name('contactoEs');
Route::get('{lang?}/testimonio/', [ 'uses' => 'PublicController@testimony' ])->name('testimonioEs');

Route::post('toursOpcionPrecio/', [ 'uses' => 'PublicController@toursOpcionPrecio' ])->name('toursOpcionPrecio');
Route::post('toursOpcion/', [ 'uses' => 'PublicController@toursOpcion' ])->name('toursOpcion');
Route::get('{lang?}/categoria/{search?}', [ 'uses' => 'PublicController@tours' ])->name('paquetesCategoriaES');
Route::get('{lang?}/tours/filtro/{precio?}/{departamento?}', [ 'uses' => 'PublicController@toursPrecioCiudad' ])->name('paquetesCategoriaPrecioCiudadES');

/*_______________ Add carrito de compra_____________________________________________________________________________________________________________*/

Route:: get('es/add-to-cart/{id}', [

		'uses' => 'ProductController@getAddToCart',
		'as' => 'product.addToCart'
	
]);

Route:: get('es/detalle/shopping-cart/', [
	
		'uses' => 'ProductController@getCart',
		'as' => 'product.shoppingCart'
	
]);

Route:: get('es/datos/checkout', [
	
		'uses' => 'ProductController@getCheckout',
		'as' => 'checkout'
	
]);

Route:: POST('es/datos/checkout', [
	
		'uses' => 'ProductController@postCheckout',
		'as' => 'checkoutPost'
	
]);

Route:: POST('es/testimonios/', 
[

	'uses' => 'TestimonioController@ingresarTestimonio',
	'as' => 'create.ingresarTestimonio'

]);



Route::resource('contacto-reserva','ContactController');

/*_______________ Add carrito de compra_____________________________________________________________________________________________________________*/