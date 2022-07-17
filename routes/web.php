<?php

use App\Http\Controllers\frontendBackendController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [frontendBackendController::class,'frontend']);

Route::get('/dashbord', [frontendBackendController::class,'backend'])->name('admin.dashbord');
Route::get('/main',[MainController::class,'index'])->name('admin.main');
