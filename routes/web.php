<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProfileController;

Route::get("/profile/{id}", [ ProfileController::class, "index" ]);
