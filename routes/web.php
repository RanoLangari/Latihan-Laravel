<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use PhpParser\Node\Stmt\Echo_;

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
    return view ('welcome');
});

Route::get('hello', function(){return view ('hello');} );

Route::get('/login',[AuthController::class,'login']);
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'Register']);
Route::post('/register', [AuthController::class, 'registerUser']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/user', [UserController::class, 'getAllUsers']);
Route::post('/adduser', [UserController::class,'addUser']);
Route::patch('/update-user/{id}', [UserController::class,'updateUser']);
Route::delete('/delete-user/{id}', [UserController::class,'deleteUser']);

// Route::resource('posts', PostController::class);
Route::get('posts', [PostController::class, 'index']);
Route::get('posts/create',[PostController::class,'create']);
Route::get('posts/{id}', [PostController::class,'show']);
Route::post('posts', [PostController::class,'store']);
Route::get('posts/{id}/edit', [PostController::class,'edit']);
Route::patch('posts/{id}/edit', [PostController::class,'update']);
Route::delete('posts/{id}/delete', [PostController::class,'destroy']);
