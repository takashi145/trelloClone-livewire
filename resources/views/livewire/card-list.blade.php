<div class="m-3">
    <div class="mx-4 position-fixed">
        <div class="mx-3 fs-5">
            カード数：{{count($cards)}}
        </div>
        <button wire:click="increase" class="btn btn-link">
            + 表示件数を増やす
        </button>
    </div>

    <div class="pt-5"></div>

    <div class="mx-3 pt-5 row flex-nowrap">
        @foreach($cards as $card)
        <div class="col-6 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="border-bottom d-flex justify-content-between mb-2">
                        <h5 class="card-title fs-5">{{ $card->name }}</h5>
                        <details class="mb-2">
                            タスク数：{{count($card->tasks)}}
                            <livewire:edit-card :card="$card" wire:key="card-update-{{$card->id}}" />
                            <livewire:delete-card :card="$card" wire:key="card-delete-{{$card->id}}" />
                        </details>
                    </div>

                    @foreach($card->tasks as $task)
                    <div class="border my-2 p-2 d-flex justify-content-between">
                        <p class="card-text">{{ $task->name }}</p>
                        <div>
                            <livewire:edit-task :task="$task" wire:key="task-update-{{$task->id}}" />
                            <livewire:delete-task :task="$task" wire:key="task-delete-{{$task->id}}" />
                        </div>
                    </div>
                    @endforeach
                    
                    <livewire:create-task :card="$card" wire:key="create-task-{{$card->id}}" />
                    
                </div>
            </div>
        </div>
        @endforeach

        <livewire:create-card />
        
    </div>
</div>
