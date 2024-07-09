<?php

use App\Http\Controllers\Api\SummarizeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('summarize', [SummarizeController::class, 'getSummarizeByDate']);
