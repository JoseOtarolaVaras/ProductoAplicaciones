<?php
<<<<<<< HEAD

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('calificaciones','CalificacionesController');
=======
Route::get('/',function(){
return view('inicio');
});
Route::view('/inicio','inicio');
Route::view('/contactos','contactos');
Route::resource('profesor','ProfesorController');
Route::resource('alumnos','AlumnosController');
Route::resource('cursos','CursosController');
Route::resource('calificaciones','CalificacionesController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 33e86e7 (first commit)
