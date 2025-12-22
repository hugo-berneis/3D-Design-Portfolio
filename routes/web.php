<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ModelUploadController;
use App\Http\Controllers\PictureController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{design}', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::post('/portfolio/{design}/rotation', [PortfolioController::class, 'updateRotation'])->name('portfolio.update-rotation');
Route::get('/portfolio/category/{category}', [PortfolioController::class, 'category'])->name('portfolio.category');

Route::get('/pictures', [PictureController::class, 'index'])->name('pictures.index');
Route::post('/pictures', [PictureController::class, 'store'])->name('pictures.store');
Route::post('/pictures/reorder', [PictureController::class, 'reorder'])->name('pictures.reorder');
Route::delete('/pictures/{picture}', [PictureController::class, 'destroy'])->name('pictures.destroy');
Route::patch('/pictures/{picture}', [PictureController::class, 'update'])->name('pictures.update');

Route::get('/contact', function () {
    return view('portfolio.contact');
})->name('portfolio.contact');

Route::get('/upload', function () {
    return view('portfolio.upload', ['designs' => \App\Models\Design::all()]);
})->name('models.upload');
Route::post('/api/models/upload', [ModelUploadController::class, 'store'])->name('models.store');
Route::delete('/api/models/{design}', [ModelUploadController::class, 'destroy'])->name('models.destroy');
