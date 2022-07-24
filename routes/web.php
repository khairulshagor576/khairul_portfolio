<?php

use App\Http\Controllers\educationExprienceController;
use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\frontendBackendController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [frontendBackendController::class,'frontend']);

Route::get('/dashbord', [frontendBackendController::class,'backend'])->name('admin.dashbord');

Route::get('/main',[MainController::class,'index'])->name('admin.main');
Route::put('/main/update',[MainController::class,'update'])->name('admin.main.update');

/*-----------------
    ABOUT ME
-------------------*/
Route::get('/aboutme',[AboutmeController::class,'index'])->name('admin.aboutme');
Route::put('/aboutme/update',[AboutmeController::class,'update'])->name('admin.aboutme.update');

/*-----------------------
EDUCATION AND EXPRICENCE
-------------------------*/
Route::get('/educationexprience/create',[educationExprienceController::class,'create'])->name('admin.educationexprience.create');
Route::post('/educationexprience/store',[educationExprienceController::class,'store'])->name('admin.educationexprience.store');
Route::get('/educationexprience/list',[educationExprienceController::class,'show'])->name('admin.educationexprience.list');
Route::get('/educationexprience/edit/{id}',[educationExprienceController::class,'edit'])->name('admin.educationexprience.edit');
