<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todocontroller;
use App\Http\Controllers\CategoryController;

Route::get('/', [Todocontroller::class,'index']);
Route::post('/todos', [Todocontroller::class, 'store']);
Route::patch('/todos/update', [Todocontroller::class, 'update']);
Route::delete('/todos/delete', [Todocontroller::class, 'destroy']);

Route::get('/categories', [CategoryController::class, 'index']);
