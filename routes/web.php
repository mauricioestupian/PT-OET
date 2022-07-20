<?php

use App\Http\Controllers\PageIndex;
use Illuminate\Support\Facades\Route;


Route::get('/', PageIndex::class);
Route::get('/autos', [PageIndex::class, 'autos'])->name('autos');
Route::get('/personas', [PageIndex::class, 'personas'])->name('personas');
Route::get('/reprotes', [PageIndex::class, 'reportes'])->name('reportes');
