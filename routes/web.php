<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnController;

Route::get('/',[OwnController::class,'front']);
Route::get('/projects',[OwnController::class,'projects'])->name('get.projects');
Route::get('/skills',[OwnController::class,'skills'])->name('get.skills');
Route::get('/abouts',[OwnController::class,'abouts'])->name('get.abouts');
Route::get('/contacts',[OwnController::class,'contacts'])->name('get.contacts');
