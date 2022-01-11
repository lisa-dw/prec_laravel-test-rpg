<?php

namespace App\Http\Controllers\Api\v1\Player;

use App\Http\Controllers\Controller;
use App\Http\Resources\Player\PlayerListResource;
use App\Http\Resources\Player\PlayerResource;
use App\Models\Player\Player;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Player::with('quests')->get();

        //return response()->json($outs, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
        return PlayerListResource::collection($outs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        $player->load('quests');

        //return response()->json($player, Response::HTTP_OK, [], JSON_PRETTY_PRINT);
        return new PlayerResource($player);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $outs = $player->delete();
    }
}
