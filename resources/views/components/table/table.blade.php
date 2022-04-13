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
            <th scope="col">Cars</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
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
                <td>
                    @foreach($player -> cars as $car)
                        <p>
                            {{$car->name}}
                        </p>
                    @endforeach
                </td>
                <td> {{$player->address->address}} {{"|"}} {{$player->address->country->name}}</td>
                <td><a href="{{url('players/' . $player->id)}}"><button type="button" class="btn btn-light">Show</button></a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>


