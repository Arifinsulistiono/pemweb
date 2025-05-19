<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Models\Guru;
use App\Livewire\ShowHomePage;
use App\Http\Controllers\GuruController;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/gurus', function () {
    $gurus = Guru::all();
    return view('gurus.index', compact('gurus'));
});

Route::get('/', ShowHomePage::class)->name('home');

Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');