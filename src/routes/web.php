<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todocontroller;
use App\Http\Controllers\CategoryController;

Route::get('/', [Todocontroller::class,'index']);
Route::get('/todos/search', [Todocontroller::class, 'search']);
Route::post('/todos', [Todocontroller::class, 'store']);
Route::patch('/todos/{todo_id}', [Todocontroller::class, 'update']);
Route::delete('/todos/{todo_id}', [Todocontroller::class, 'destroy']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::patch('/categories/{category_id}', [CategoryController::class, 'update']);
Route::delete('/categories/{category_id}', [CategoryController::class, 'destroy']);