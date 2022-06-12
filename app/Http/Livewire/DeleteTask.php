<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteTask extends Component
{
    public $task;

    public function destroyTask()
    {
        $this->task->delete();
        $this->emit('deletedTask');
    }

    public function render()
    {
        return view('livewire.delete-task');
    }
}
