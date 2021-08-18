<?php


use App\Http\Controllers\StatesController;
use App\Http\Controllers\MinucipalitiesController;
use App\Http\Controllers\GasolineController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/getStates', StatesController::class)->name('getStates');
Route::get('/getMunicipalities', MinucipalitiesController::class)->name('getStates');
Route::get('/getGasoline/{zipCode}', GasolineController::class)->name('getStates');
