<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
Use App\Http\Controllers\civillianUSerController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\Service_controller;
use App\Models\Reports;

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

///group all user Auth route
Route::prefix('user')->group(function () {
    Route::post('register',[AuthController::class,'register'])->name('register');
    Route::post('login',[AuthController::class,'login'])->name('login');

    Route::middleware(['auth:sanctum','scope.admin'])->group(function () {
        Route::get('user',[AuthController::class,'user'])->name('user');
        Route::get('Detallis',[Service_controller::class,'getDbDetiales']);
        Route::post('logout',[AuthController::class,'logout'])->name('logout');
        Route::put('Info',[AuthController::class,'updateInfo'])->name('updateInfo');
        Route::put('password',[AuthController::class,'upadtePassword'])->name('upadtePassword');
        Route::get('index',[civillianUSerController::class,'index'])->name('index');
        Route::apiResource('Reports',ReportsController::class);

    });
});
