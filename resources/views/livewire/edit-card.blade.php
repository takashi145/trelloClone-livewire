<div class="my-1">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{$card->id}}">
        編集
    </button>
    <div class="modal fade" id="editModal-{{$card->id}}" tabindex="-1" aria-labelledby="editCardModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCardModalLabel">カードの編集</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="updateCard">
                    <div class="modal-body">
                        <input wire:model.defer="card.name" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
