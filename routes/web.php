<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TenantController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller( UnitController::class)->prefix('units')->group(function () {
    Route::get('', 'index');
    Route::get('{unit}', 'show');
});

Route::controller( TenantController::class)->prefix('tenants')->group(function () {
    Route::get('', 'index');
    Route::get('add', 'add')->name('tenants.add');
    Route::post('add', 'store')->name('tenants.store');
    Route::get('{tenant}', 'show')->name('tenants.show');
});
