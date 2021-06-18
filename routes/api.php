<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutomovelController;

Route::apiResource('veiculos', AutomovelController::class);
Route::get('find', 'App\Http\Controllers\AutomovelController@find');
