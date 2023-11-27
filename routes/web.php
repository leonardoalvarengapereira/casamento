<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecadosController;

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
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/casamento', function () {
    return view('casamento');
});

Route::get('/presentes', function () {
    return view('presentes');
});

Route::get('/recados', [RecadosController::class, "index"])->name('recados.index');
Route::post('/recados', [RecadosController::class, "create"])->name('recados.create');
