<div class="m-3">
    <div class="m-3">
        カード数：{{ count($cards )}}
    </div>
    <div class="row flex-nowrap">
        @foreach($cards as $card)
        <div class="col-5 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="border-bottom d-flex justify-content-between">
                        <h5 class="card-title">{{ $card->name }}</h5>
                        <div>
                            <livewire:edit-card :card="$card" wire:key="update-{{$card->id}}" />
                            <livewire:delete-card :card="$card" wire:key="delete-{{$card->id}}" />
                        </div>
                        
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
        
        <livewire:create-card />
    </div>
</div>
