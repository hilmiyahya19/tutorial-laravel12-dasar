<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Player::with('coach')->orderBy('market_value', 'desc')->paginate(10);
        return view('player.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $coaches = Coach::all();
        return view('player.create', ['coaches' => $coaches]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $player = Player::with('coach')->findOrFail($id);
        return view('player.show', ['player' => $player]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
