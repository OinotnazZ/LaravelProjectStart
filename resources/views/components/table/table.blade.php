<div class="table">
    <h1>PLAYERS</h1>
    <table class="table table-bordered table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($players as $player)
            <tr>
            <td> {{$player->id}}</td>
            <td> {{$player->name}}</td>
            <td> {{$player->birth_date}}</td>
            <td> {{$player->created_at}}</td>
            <td> {{$player->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


