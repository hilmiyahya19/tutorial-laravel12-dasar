<?php

use Illuminate\Support\Facades\Route;
use App\Models\Player;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    // $name = 'Hilmi Yahya';
    // $data = 'Hilmi Yahya';
    // $age = 23; 
    // return view('about', ['data' => $name, 'age' => 23]);
    // return view('about', compact('data', 'age'));
    return view('about')->with('data', 'Hilmi Yahya')->with('age', 23);
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/player', [App\Http\Controllers\PlayerController::class, 'index'])->name('player.index');
Route::post('/player', [App\Http\Controllers\PlayerController::class, 'store'])->name('player.store');
Route::get('/player/create', [App\Http\Controllers\PlayerController::class, 'create'])->name('player.create');
Route::get('/player/{player}', [App\Http\Controllers\PlayerController::class, 'show'])->name('player.show');
// Route::get('/player/{id}/edit', [App\Http\Controllers\PlayerController::class, 'edit'])->name('player.edit');
// Route::put('/player/{id}', [App\Http\Controllers\PlayerController::class, 'update'])->name('player.update');
Route::delete('/player/{player}', [App\Http\Controllers\PlayerController::class, 'destroy'])->name('player.destroy');