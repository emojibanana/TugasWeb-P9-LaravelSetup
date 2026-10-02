<?php

use App\Http\Controllers\CustomController;

Route::get('/', function () {
    return view('welcome', [
        'name' => 'Banna',
        'courses' => ['HTML', 'CSS', 'Laravel'],
    ]);
});

Route::get('/', [CustomController::class, 'home']);
Route::get('/about',[CustomController::class, 'about']);
Route::get('/contact', [CustomController::class, 'contact']);

Route::get('/posts', [CustomController::class, 'posts']);

// Bonus: Route Parameter
Route::get('/hello/{nama}', [CustomController::class, 'hello']);