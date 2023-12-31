<?php

use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('game/all', [GamesController::class, 'all']);

Route::get('developer/all', [DevelopersController::class, 'all']);

Route::get('application/all', [ApplicationsController::class, 'all']);

Route::get('/game/detailgames/{id_game}', [GamesController::class, 'show']);

Route::get('/developer/detaildevelopers/{id_developer}', [DevelopersController::class, 'show']);

Route::get('/application/detailapplication/{id_aplikasi}', [ApplicationsController::class, 'show']);