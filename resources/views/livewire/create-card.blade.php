<div>
    <form wire:submit.prevent="createCard" class="col-5 col-md-3">
        <input wire:model.defer="cardName" type="text" class="form-control" placeholder="新しいカードを追加">
        @error('cardName')
            <p class="text-danger m-1">{{ $message }}</p>
        @enderror
        <input type="submit" class="invisible">
    </form>
</div>
