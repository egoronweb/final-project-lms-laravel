<?php

use App\Http\Controllers\api\LoginController;
use App\Http\Controllers\api\UserController;
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

Route::post('/user-register', [UserController::class, 'create']);
Route::get('/admin-dashboard/users-management', [UserController::class, 'index']);
Route::get('/admin-dashboard/users-management/edit/{id}', [UserController::class, 'edit']);
Route::put('/admin-dashboard/users-management/edit/update/{id}', [UserController::class, 'update']);
Route::delete('/admin-dashboard/users-management/delete/{id}', [UserController::class, 'destroy']);


Route::post('/user-login', [LoginController::class, 'userLogin']);
Route::post('/admin-login', [LoginController::class, 'adminLogin']);
