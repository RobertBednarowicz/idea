<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/ideas');

Route::resource('ideas', IdeaController::class);
