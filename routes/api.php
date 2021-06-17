<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutomovelController;

// Route::apiResource('veiculos', AutomovelController::class);

Route::group(['prefix' => 'v1'], function() {
    Route::get('veiculos', 'App\Http\Controllers\AutomovelController@index');
    Route::get('veiculos/${veiculo}', 'App\Http\Controllers\AutomovelController@show');
    Route::get('veiculos/find', 'App\Http\Controllers\AutomovelController@find'); // rota da busca, que não funciona
    Route::post('veiculos', 'App\Http\Controllers\AutomovelController@store');
    Route::put('veiculos/${veiculo}', 'App\Http\Controllers\AutomovelController@update');
    Route::delete('veiculos/${veiculo}', 'App\Http\Controllers\AutomovelController@destroy');
});
