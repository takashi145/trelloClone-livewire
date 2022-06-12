<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;
use Livewire\WithPagination;

class CardList extends Component
{
    public $count;

    public function mount()
    {
        $this->count = 5;
    }

    protected $listeners = [
        'createdCard' => 'createdCard',
        'updatedCard' => 'updatedCard',
        'deletedCard' => 'deletedCard',
        'createdTask' => 'createdTask',
        'deletedTask' => 'deletedTask',
        'updatedTask' => 'updatedTask',
    ];

    public function createdCard(){}
    
    public function updatedCard(){}

    public function deletedCard(){}

    public function createdTask(){}

    public function deletedTask(){}

    public function updatedTask(){}

    public function increase()
    {
        $this->count += 5;
    }

    public function render()
    {
        return view('livewire.card-list', [
            'cards' => Card::with('tasks')->take($this->count)->get()
        ]);
    }
}
