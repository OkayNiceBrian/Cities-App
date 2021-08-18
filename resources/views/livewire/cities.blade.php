@section('title')
Cities
@endsection
<div>
    <input wire:model="search" type="text" placeholder="Search Cities" size="50" />
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    <a href="#" wire:click="doSort('name', 'asc')">&uarr;</a>
                    Name
                    <a href="#" wire:click="doSort('name', 'desc')">&darr;</a>
                </th>
                <th>
                    <a href="#" wire:click="doSort('state', 'asc')">&uarr;</a>
                    State
                    <a href="#" wire:click="doSort('state', 'desc')">&darr;</a>
                </th>
                <<th>
                    <a href="#" wire:click="doSort('population_2010', 'asc')">&uarr;</a>
                    Population 2010
                    <a href="#" wire:click="doSort('population_2010', 'desc')">&darr;</a>
                </th>
                <th>
                    <a href="#" wire:click="doSort('population_rank', 'asc')">&uarr;</a>
                    Population Rank
                    <a href="#" wire:click="doSort('population_rank', 'desc')">&darr;</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
            <tr class="active">
                <td>{{$city->name}}</td>
                <td>{{$city->state}}</td>
                <td>{{$city->population_2010}}</td>
                <td>{{$city->population_rank}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
