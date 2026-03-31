<?php

use Illuminate\Support\Facades\Route;

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
});
Route::get('/player', function () {
    $data = [
        ['id' => 1, 'name' => 'Pedri', 'score' => 90],
        ['id' => 2, 'name' => 'Yamal', 'score' => 95],
        ['id' => 3, 'name' => 'Fermin', 'score' => 80],
    ];
    return view('player.index', ['data' => $data]);
});
Route::get('/player/{id}', function ($id) {
    // dd($id);
    return view('player.show', ['id' => $id]);
});
Route::get('/contact', function () {
    return view('contact');
});