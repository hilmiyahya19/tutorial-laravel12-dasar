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
        $validatedData = $request->validate([
            'name' => 'required|string|min:3',
            'date_of_birth' => 'required|date',
            'position' => 'required|string|min:2',
            'market_value' => 'required|numeric|min:0|max:300000000',
            'coach_id' => 'required|exists:coaches,id',
        ]);

        // dd($request->market_value);
        Player::create([
            'name' => $validatedData['name'],
            'date_of_birth' => $validatedData['date_of_birth'],
            'position' => $validatedData['position'],
            'market_value' => $validatedData['market_value'],
            'coach_id' => $validatedData['coach_id'],
        ]);

        return redirect()->route('player.index')->with('success', 'Player created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        // $player = Player::with('coach')->findOrFail($id);
        $player->load('coach');
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
    public function destroy(Player $player)
    {
        // $player = Player::findOrFail($id);
        $player->delete();
        return redirect()->route('player.index')->with('success', 'Player deleted successfully');    
    }
}
