<?php

use App\Http\Controllers\AccomodationController;
use App\Http\Controllers\AccomodationDetailController;
use App\Http\Controllers\DetailHotelController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\ExperiencesDetailController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesDetailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/experience', function () {
    return DB::table('experience')->get();
});
Route::get('/service', function () {
    return DB::table('service')->get();
});

Route::get('/accomodation', [AccomodationController::class, 'index']);
Route::get('/accomodation/{id}', [AccomodationController::class, 'show']);
Route::get('/detail_hotel/{id}', [AccomodationDetailController::class, 'show']);
Route::get('/experiences', [ExperiencesController::class, 'index']);
Route::get('/experiences/{id', [ExperiencesController::class, 'show']);
Route::get('/trip_detail/{id}', [ExperiencesDetailController::class, 'show']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/services/{id}', [ServicesController::class, 'show']);
Route::get('/detail_services/{id}', [ServicesDetailController::class, 'show']);