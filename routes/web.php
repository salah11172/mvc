<?php
use src\Http\Route;

Route::get('/',[\App\Controllers\HomeController::class,'index']);
