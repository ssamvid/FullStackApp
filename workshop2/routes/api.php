<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\CourseController;

Route::apiResource('students', StudentController::class);
Route::apiResource('courses', CourseController::class);