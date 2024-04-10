<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController; // importamos el controlador para usarlo dentro del middleware

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route default to create project

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware('auth')->group(function () {
    Route::resource('projects', ProjectController::class); // para que funcione ProjectController::class debemos al menos crear el emtodo index en el controller deseado
// });