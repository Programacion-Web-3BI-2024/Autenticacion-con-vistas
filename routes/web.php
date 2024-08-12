<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Autenticacion;

Route::get("/", [PizzaController::class, "Listar"]);



Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', [UserController::class,"Logout"]) ;


Route::post("/login",[UserController::class,"Login"]);

Route::get('/crear', function () {
    return view('crear');
})-> middleware(Autenticacion::class);

Route::post('/crear', [PizzaController::class,"Crear"]) 
    -> middleware(Autenticacion::class);

Route::get("/eliminar/{d}",[PizzaController::class, "Eliminar"])
    -> middleware(Autenticacion::class);

Route::get('/modificar/{d}', [PizzaController::class,"MostrarFormularioDeModificar"])
    -> middleware(Autenticacion::class);
Route::post('/modificar', [PizzaController::class,"Modificar"])
    -> middleware(Autenticacion::class);