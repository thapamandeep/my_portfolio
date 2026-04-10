<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnController;

Route::get('/',[OwnController::class,'front']);
