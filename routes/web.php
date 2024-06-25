<?php

use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/nosotros', function () {
    return view('about');
})->name('about');

Route::get('/reporte-vista', function () {
    return view('reports');
})->name('reporte.vista');


Route::resource('reportes', ReporteController::class);
Route::resource('publicaciones', PublicationController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
