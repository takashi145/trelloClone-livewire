<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class CardList extends Component
{
    protected $listeners = [
        'createdCard' => 'createdCard',
        'updatedCard' => 'updatedCard',
        'deletedCard' => 'deletedCard',
        'createdTask' => 'createdTask',
        'deletedTask' => 'deletedTask',
    ];

    public function createdCard(){}
    
    public function updatedCard(){}

    public function deletedCard(){}

    public function createdTask(){}

    public function deletedTask(){}

    public function render()
    {
        return view('livewire.card-list', [
            'cards' => Card::with('tasks')->get()
        ]);
    }
}
