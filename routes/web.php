<?php

use Illuminate\Support\Facades\Route;
use app\http\hcontrollers\FirstEzraController;





Route::get('/', [FirstEzraController::class, 'index']);
Route::get('/chapter/{chapter_number}', [FirstEzraController::class, 'readByChapter']);
Route::get('/all-chapters', [FirstEzraController::class, 'readAllChapters']);
