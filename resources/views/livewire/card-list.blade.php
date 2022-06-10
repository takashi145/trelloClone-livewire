<div class="m-3">
    <div class="row flex-nowrap">
        @for($i = 0; $i < 3; $i++)
        <div class="col-5 col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title border-bottom border-1">Title</h5>
                    @for($j = 0; $j < rand(1, 10); $j++)
                    <p class="card-text">task</p>
                    @endfor
                    <form action="" method="get">
                        <input type="text" class="form-control" placeholder="タスクを追加">
                        <input type="submit" class="invisible">
                    </form>
                </div>
            </div>
        </div>
        @endfor
        <form class="col-5 col-md-3">
            <input type="text" class="form-control" placeholder="新しいカードを追加">
            <input type="submit" class="invisible">
        </form>
    </div>
</div>
