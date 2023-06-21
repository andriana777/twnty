<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::get('/', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/add', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/save', [TaskController::class, 'save'])->name('task.save');
Route::get('/task/edit/{id})', [TaskController::class, 'edit'])->name('task.edit');
Route::patch('/task/update/{id})', [TaskController::class, 'update'])->name('task.update');
Route::get('/{id})', [TaskController::class, 'destroy'])->name('task.destroy');
Route::get('/task/{id})', [TaskController::class, 'show'])->name('task.show');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/user/register', [UserController::class, 'register'])->name('user.register');
Route::post('/', [UserController::class, 'save'])->name('user.save');
Route::get('/user/edit/{id})', [UserController::class, 'edit'])->name('user.edit');
Route::patch('/user/update/{id})', [UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id})', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/{id})', [UserController::class, 'show'])->name('user.show');