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
        ['id' => 1, 'name' => 'Pedri', 'date_of_birth' => '2002-11-25', 'position' => 'CM', 'market_value' => 150000000],
        ['id' => 2, 'name' => 'Yamal', 'date_of_birth' => '2004-02-16', 'position' => 'RW', 'market_value' => 200000000],
        ['id' => 3, 'name' => 'Fermin', 'date_of_birth' => '2001-07-12', 'position' => 'AM', 'market_value' => 100000000],
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