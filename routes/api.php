<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
    Route::post('/register',[AuthController::class,'register'])->name('register');
    Route::post('/login',[AuthController::class,'login'])->name('login');
    // Route::post('users/{id}', function ($id) {return 'User'.$id; }); still work on it 
});
Route::match(['get', 'post'], '/user/profile', function ($id) {

});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
