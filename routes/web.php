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

//Rutas sencillas
Route::get('/', ['middleware' => 'miscuro', function () {
    return view('welcome');
}]);

Route::get('/normas-de-la-comunidad', function () {
    return view('reglas');
});

//--------------------------------------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cursos/{url}', 'TemarioController@index');

Route::get('/cursos/r/{url_curso}/{url}', 'ReproductorController@index');

Route::get('/messages/{url}', 'MessageController@mensajes');

Route::post('/messages', 'MessageController@agregarMensaje');

Route::get('/blog', 'BlogController@index');

Route::get('/panel', 'PanelController@index');

Route::get('/cursosinterno', 'InternoController@index');

Route::resource('/page', 'PageController');

Route::get('/{url}', 'BlogController@post');


Route::resource('/panel/cursos', 'CursosController');

