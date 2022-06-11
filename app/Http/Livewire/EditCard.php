<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class EditCard extends Component
{
    public $card;
    public $name;
    public $isOpen;

    public function mount()
    {
        $this->name = $this->card->name;
    }

    public function closeModal()
    {
        $this->name = $this->card->name;
    }

    public function updateCard()
    {
        Card::findOrFail($this->card->id)->update([
            'name' => $this->name
        ]);
        $this->emit('updatedCard');
    }
    

    public function render()
    {
        return view('livewire.edit-card');
    }
}
