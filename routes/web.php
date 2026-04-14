<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnController;

Route::get('/',[OwnController::class,'front']);
Route::get('/projects',[OwnController::class,'projects'])->name('get.projects');
Route::get('/skills',[OwnController::class,'skills'])->name('get.skills');
Route::get('/abouts',[OwnController::class,'abouts'])->name('get.abouts');
Route::get('/contacts',[OwnController::class,'contacts'])->name('get.contacts');

// ---------------------------form-----------------------------//
Route::get('/projects-fill',[OwnController::class,'fillProjects']);
Route::post('projects-store',[OwnController::class,'projectStore'])->name('post.projects');
Route::get('skills-fill',[OwnController::class,'skillFill']);
Route::post('skill-store',[OwnController::class,'skillStore'])->name('post.skill');
Route::get('/abouts-fill',[OwnController::class,'aboutFill']);
Route::post('abouts-store',[OwnController::class,'aboutStore'])->name('post.abouts');
Route::get('/contacts-fill',[OwnController::class,'contactFill']);
Route::post('/contacts-store',[OwnController::class,'contactStore'])->name('post.contacts');
Route::get('/education-fill',[OwnController::class,'educationFill']);
Route::post('/education-store',[OwnController::class,'educationStore'])->name('post.education');