<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/user', [UserController::class, 'getAllUsers']);
Route::post('/adduser', [UserController::class,'addUser']);
Route::patch('/update-user/{id}', [UserController::class,'updateUser']);
Route::delete('/delete-user/{id}', [UserController::class,'deleteUser']);