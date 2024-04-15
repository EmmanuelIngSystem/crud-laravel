<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController; // we import the controller to use it within the middleware

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

Route::resource('projects', ProjectController::class); // For Project Controller::class to work we must at least create the index method in the desired controller
