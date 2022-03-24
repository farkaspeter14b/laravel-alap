<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('student',[StudentController::class, "index"])->name("student.index");
Route::get('student/{student}',[StudentController::class, "show"])->name("student.show");
Route::post('student',[StudentController::class, "store"])->name("student.store");
Route::put('student/{student}',[StudentController::class, "update"])->name("student.update");
Route::delete('student/{student}',[StudentController::class, "destroy"])->name("student.destroy");
Route::get('count',[StudentController::class, "count"])->name("student.count");
