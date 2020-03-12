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

/*Inicio*/
Route::get('/home', 'HomeController@index')->name('home');

/*Temario:Lista de clases de los cursoso*/
Route::get('/cursos/{url}', 'TemarioController@index');

/*Temario:Lista de clases de los cursoso*/
Route::get('/cursos/r/{url_curso}/{url}', 'ReproductorController@index');

/*Comentarios de las clases */
Route::get('/messages/{url}', 'MessageController@mensajes');


Route::post('/messages', 'MessageController@agregarMensaje');

/*Blog*/
Route::get('/blog', 'BlogController@index');

/*Panel*/
Route::get('/panel', 'PanelController@index');

/*Inicio de cursos internos*/
Route::get('/cursosinterno', 'InternoController@index');

/*Pagina del blog*/
Route::resource('/page', 'PageController');

/*Blog*/
Route::get('/{url}', 'BlogController@post');

/*Cursos*/
Route::resource('/panel/cursos', 'CursosController');

/*Creador de modulos de los cursos*/
Route::resource('/panel/cursos/{url}/modulo', 'CrearModuloController');

/*Eliminador de modulo*/
Route::get('/panel/cursos/{url}/modulo/{id}/confirmDelete', 'CrearModuloController@confirmDelete');

/*Creador de clases*/
Route::resource('/panel/cursos/{url}/clases', 'CrearClasesController');

/*Eliminador de clases*/
Route::get('/panel/cursos/{url}/clases/{id}/confirmDelete', 'CrearClasesController@confirmDelete');

/*creador de clases de texto*/
Route::resource('/panel/cursos/{url}/clasesTexto', 'CrearClasesTextoController');

/*listas de preguntas del examen*/
Route::get('/panel/cursos/{url}/examen', 'ExamenController@index');
