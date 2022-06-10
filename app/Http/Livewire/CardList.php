<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class CardList extends Component
{
    public $cardName;
    public $taskName;

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
            'name' => $this->cardName,
        ]);
        $this->cardName = "";
    }
    
    public function destroyCard($id)
    {
        Card::findOrFail($id)->delete();
    }

    public function createTask()
    {
        dd($this->taskName);
    }
    

    public function render()
    {
        return view('livewire.card-list',
            ['cards' => Card::all()]
        );
    }
}
