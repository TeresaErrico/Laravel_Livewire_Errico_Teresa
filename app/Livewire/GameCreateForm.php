<?php

namespace App\Livewire;

use App\Models\Game;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;


class GameCreateForm extends Component
{

    use WithFileUploads;
    #[Validate]
    public $title;
    #[Validate]
    public $description;
    #[Validate('image|max:1024')]
    public $img;

    public function store()
    {
        $this->validate();
    
        $games = Game::create([
            'title' => $this->title,
            'description' => $this->description,
            "img" => $this->img->store('public/img'),
        ]);
        $this->reset();
        session()->flash('succes', 'Gioco creato correttamente!');
    }

    public function rules(){
        return[
            'title'=>'required|min:5|max:15',
            'description' => 'required|max:15',
            'img'=>'required',
        ];
    }

    public function render()
    {
        return view('livewire.game-create-form');
    }
}
