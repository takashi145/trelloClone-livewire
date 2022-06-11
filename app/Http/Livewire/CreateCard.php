<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class CreateCard extends Component
{
    public $cardName;

    protected $rules = [
        'cardName' => 'required|max:30'
    ];

    protected $messages = [
        'cardName.required' => '必須項目です。',
        'cardName.max' => '30文字以内で入力してください。',
    ];

    public function createCard()
    {
        $this->validate();

        Card::create([
            'name' => $this->cardName
        ]);
        $this->emit('createdCard');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-card');
    }
}
