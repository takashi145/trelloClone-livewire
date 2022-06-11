<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class DeleteCard extends Component
{
    public $card;

    public function destroyCard()
    {
        $this->card->delete();
        $this->card->refresh();
        $this->emit('deletedCard');
    }

    public function render()
    {
        return view('livewire.delete-card');
    }
}
