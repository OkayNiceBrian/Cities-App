@extends('layout')

@section('content')
<a class="btn btn-primary" href="{{route('cities.create')}}">Create</a>

{{ $cities->links() }}
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th><a href="{{ route('cities.index', ['sort' => 'name']) }}">Name</a></th>
            <th><a href="{{ route('cities.index', ['sort' => 'state']) }}">State</a></th>
            <th><a href="{{ route('cities.index', ['sort' => 'population']) }}">Population 2010</a></th>
            <th><a href="{{ route('cities.index', ['sort' => 'rank']) }}">Population Rank</a></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cities as $city)
        <tr class="active">
            <td>{{$city->name}}</td>
            <td>{{$city->state}}</td>
            <td>{{$city->population_2010}}</td>
            <td>{{$city->population_rank}}</td>
            <td><a href="{{ route('cities.show', $city->id) }}">Show Details</a></td>
            <td><a href="{{ route('cities.edit', $city->id) }}">Edit</a></td>
            <td>
                <form action="{{route('cities.destroy', $city->id)}}" method="POST" onSubmit="return confirm('Are you sure you want to delete this city?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-error" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $cities->links() }}
@endsection