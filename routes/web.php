<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProfileController::class,'index' ])->name('Website.HomePage');
Route::post('/profile',[ProfileController::class,'store'])->name('Website.store');
Route::get('/profile/about',[ProfileController::class,'about'])->name('Website.About');
Route::get('/profile/project',[ProfileController::class,'project'])->name('Website.Project');
Route::get('/profile/resume',[ProfileController::class,'resume'])->name('Website.Resume');
Route::get('/profile/memory',[ProfileController::class,'memory'])->name('Website.Memory');
Route::get('/profile/achievement',[ProfileController::class,'achievement'])->name('Website.Achievement');
