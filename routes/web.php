<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\CustomerMessagesController;


Route::get('sections', [SectionsController::class, 'index']);
Route::post('customer/messages',[CustomerMessagesController::class,'store']);
Route::post('login',[AuthController::class, 'login']);
Route::post('logout',[AuthController::class, 'logout']);

