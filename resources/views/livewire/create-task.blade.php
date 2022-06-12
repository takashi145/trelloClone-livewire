<div>
    <form wire:submit.prevent="createTask">
        <input wire:model.defer="taskName" type="text" class="form-control" placeholder="タスクを追加">
        <input type="submit" class="invisible">
    </form>
</div>
