<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GamesController extends Controller
{
    public function all()
    {
        return view("game.allgames", [
            "title" => "Game",
            "games" => Game::all()]);
    }
    public function show($primaryKey)
    {
        $game = Game::findOrFail($primaryKey);
        return view("game.detailgames", [
            "title" => "detail-game",
            "game" => $game,
        ],
        );
    }
}
