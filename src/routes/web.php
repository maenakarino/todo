<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todocontroller;
use App\Http\Controllers\CategoryController;

Route::get('/', [Todocontroller::class,'index']);
Route::post('/todos', [Todocontroller::class, 'store']);
Route::patch('/todos/{todo_id}', [Todocontroller::class, 'update']);
Route::delete('/todos/{todo?id}', [Todocontroller::class, 'destroy']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::patch('/categories/update', [CategoryController::class, 'update']);