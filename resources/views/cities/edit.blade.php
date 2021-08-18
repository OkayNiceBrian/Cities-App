@extends('layout')

@section('content')
<div class="column col-3">
    <h3>Edit a City</h3>
    @if ($errors->any())
    <div class="toast toast-error">
        @foreach ($errors->all() as $error)
        <span>{{$error}}</span><br />
        @endforeach
    </div>
    @endif
    <form method="POST" action="{{route('cities.update', $city->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            @include('cities.form')
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update City</button>
            <a href="{{route('cities.index')}}">Cancel</a>
        </div>
    </form>
</div>
@endsection