<?php
use \Lomkit\Rest\Facades\Rest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Rest\Controllers\TeachersController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Rest::resource('teachers', TeachersController::class);
