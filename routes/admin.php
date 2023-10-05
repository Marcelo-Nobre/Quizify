<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuizController;

Route::get('app', [QuizController::class,'index']);

