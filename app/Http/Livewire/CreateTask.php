<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class CreateTask extends Component
{
    public $card;
    public $taskName;

    protected $rules = [
        'taskName' => 'required|max:30'
    ];

    protected $messages = [
        'taskName.required' => '必須項目です。',
        'taskName.max' => '30文字以内で入力してください。',
    ];

    public function createTask()
    {
        $this->validate();

        Task::create([
            'name' => $this->taskName,
            'card_id' => $this->card->id,
        ]);

        $this->emit('createdTask');
        $this->reset('taskName');
    }

    public function render()
    {
        return view('livewire.create-task');
    }
}
