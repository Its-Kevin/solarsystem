<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

use App\Http\Controllers\PlanetController;

Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');
Route::get('/planets/{planet?}', [PlanetController::class, 'show'])->name('planets.show');

use App\Http\Controllers\SolarSystemController;

Route::get('/solarsystems', [SolarSystemController::class, 'index'])->name('solarsystems.index');
Route::get('/solarsystems/{id?}', [SolarSystemController::class, 'show'])->name('solarsystems.show');
