<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('index');
});

Route::get('/index', 'RecordatoriosController@recordatorios')->name('recordatorios');
    /*return view('auth.login');
});*/



//Vistas por parte del cliente
Route::get('/misdatos', function () { return view('usuario.datos'); });
Route::get('/veterinaria', function () { return view('usuario.veterinaria'); });
Route::get('/getUsuario/{idUsuario}', 'UsuarioController@getUsuario')->name('getUsuario');
Route::get('/getMascota/{idMascota}', 'MascotasController@getMascota')->name('getMascota');
Route::get('/home', 'HomeController@index')->name('usuario.home');
/////


Route::get('/listaMascotas', "MascotasController@listaMascotas")->name("listaMascotas")->middleware('verified','auth');

Auth::routes(['verify' => true]);




//ACA SOLO MUESTRO EL FORMULARIO PARA CARGAR LA MASCOTA


/*Creo que es una manera mas facil de usar los middleware, sino lo usamos como esta arriba y listo. Asi tenemos a todas
las rutas separadas dependiendo quien las puede acceder
*/
Route::middleware(['auth','administrador'])->group(function () {
    Route::get('/nuevaMascota','MascotasController@cargarMascota')->name('cargarMascota');
    Route::post('/nuevaMascota','MascotasController@nuevaMascota')->name('nuevaMascota');
    Route::get('/getMascota','MascotasController@getMascota')->name('getMascota');
    Route::get('/eliminarMascota','MascotasController@eliminarMascota')->name('eliminarMascota');
    Route::post('/modificarMascota','MascotasController@modificarMascota')->name('modificarMascota');
    
    //Rutas relacionadas a los usuarios (crear, listar, editar y eliminar)
    Route::get('/crearUsuario', 'UsuarioController@crearUsuario_view')->name('crearUsuario_view');
    Route::post('/crearUsuario', 'UsuarioController@crearUsuario')->name('crearUsuario');
    
    Route::get('/editarUsuario/{id_usuario}', 'UsuarioController@editarUsuarioView')->name('editarUsuarioView');
    Route::post('/editarUsuario', 'UsuarioController@editarUsuario')->name('editarUsuario');
    Route::post('/eliminarUsuario', 'UsuarioController@eliminarUsuario')->name('eliminarUsuario');
    Route::post('/getUsuario', 'UsuarioController@getUsuario')->name('getUsuario');

    Route::get('/listaDeClientes', 'UsuarioController@listaDeClientes')->name('listaDeClientes');
});
Route::get('/tallas','MascotasController@tallas');

/*
    Estas rutas son las que se usan con AJAX para buscar los usuarios. {dni?} significa que recibe un parametro llamado dni y
    el ? indica que puede ser opcional el parametro.
*/
Route::get('/buscarUsuarioAJAX/{dni?}', "UsuarioController@buscarUsuarioAJAX")->name("buscarUsuarioAJAX");
Route::get('/listarUsuariosAJAX/{dni?}', 'UsuarioController@listarUsuariosAJAX')->name('listarUsuariosAJAX');