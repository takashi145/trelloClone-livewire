<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class EditTask extends Component
{
    public Task $task;

    protected $rules = [
        'task.name' => 'required|max:30',
    ];

    protected $messages = [
        'task.name.required' => '必須項目です。',
        'task.name.max' => '30文字以内で入力してください。',
    ];

    public function updateTask()
    {
        $this->validate();
        $this->task->update();
        $this->emit('updatedTask');
    }

    public function render()
    {
        return view('livewire.edit-task');
    }
}
