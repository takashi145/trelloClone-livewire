<div class="m-3">
    <div class="row flex-nowrap">
        @foreach($cards as $card)
        <div class="col-6 col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="border-bottom d-flex justify-content-between mb-2">
                        <h5 class="card-title">{{ $card->name }}</h5>
                        <div>
                            <livewire:edit-card :card="$card" wire:key="update-{{$card->id}}" />
                            <livewire:delete-card :card="$card" wire:key="delete-{{$card->id}}" />
                        </div>
                    </div>

                    @foreach($card->tasks as $task)
                    <div class="border my-2 p-2 d-flex justify-content-between">
                        <p class="card-text">{{ $task->name }}</p>
                        <div>
                            <livewire:delete-task :task="$task" wire:key="task-{{$task->id}}" />
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
