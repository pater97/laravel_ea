<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Game;
use App\Http\Resources\GameResource;

class gameController extends Controller
{
    public function index()
    {
        //return Game::with(['category'])->paginate(5);
        return GameResource::collection(Game::all());
    }
}
