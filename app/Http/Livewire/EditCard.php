<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class EditCard extends Component
{
    public $card;

    public function updateCard()
    {
        $this->card->update([
            'name' => $this->cardName
        ]);

        $this->emit('updatedCard');
    }
    

    public function render()
    {
        return view('livewire.edit-card');
    }
}
