<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('student');
});

Route::post('/student', [StudentController::class, 'show'])
    ->name('student.show');

