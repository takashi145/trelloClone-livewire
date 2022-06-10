<div class="m-3">
    <div class="row flex-nowrap">
        @foreach($cards as $card)
        <div class="col-5 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="border-bottom d-flex justify-content-between">
                        <h5 class="card-title">{{ $card->name }}</h5>
                        <form wire:submit.prevent="destroyCard({{ $card->id }})" class="">
                            <button class="btn btn-link text-danger card-text">
                                削除
                            </button>
                        </form>
                    </div>
                    @for($j = 0; $j < rand(1, 10); $j++)
                    <p class="card-text">task</p>
                    @endfor
                    <form wire:submit.prevent="createTask">
                        <input wire:model="taskName" type="text" class="form-control" placeholder="タスクを追加">
                        <input type="submit" class="invisible">
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <form wire:submit.prevent="createCard" class="col-5 col-md-3">
            <input wire:model="cardName" type="text" class="form-control" placeholder="新しいカードを追加">
            @error('cardName')
                <p class="text-danger m-1">{{ $message }}</p>
            @enderror
            <input type="submit" class="invisible">
        </form>
    </div>
</div>
