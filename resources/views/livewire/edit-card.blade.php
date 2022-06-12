<div>
    {{ $cardName}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
        編集
    </button>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">カードの編集</h5>
                    <button wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="updateCard">
                    <div class="modal-body">
                        <input value="{{ $cardName }}" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
