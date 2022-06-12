<div>
    <button type="button" class="btn btn-link text-primary" data-bs-toggle="modal" data-bs-target="#editTaskModal-{{$task->id}}">
        編集
    </button>
    <div class="modal fade" id="editTaskModal-{{$task->id}}" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTaskModalLabel">タスクの編集</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="updateTask">
                    <div class="modal-body">
                        <input wire:model.defer="task.name" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
