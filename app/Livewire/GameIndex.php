<?php

namespace App\Livewire;

use App\Models\Game;
use Livewire\Component;

class GameIndex extends Component
{
    public function eliminaGame(Game $game){
        $game->delete();
    }
    public function render()
    {
        $games = Game::all();
        
        return view('livewire.game-index', compact('games'));
    }
}
