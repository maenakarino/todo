<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todocontroller;

Route::get('/', [Todocontroller::class,'index']);
Route::post('/todos',[Todocontroller::class, 'store']);
