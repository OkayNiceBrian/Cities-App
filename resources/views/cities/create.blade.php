@extends('layout')

@section('content')
<div class="column col-3">
    <h3>Make a City</h3>
    @if ($errors->any())
    <div class="toast toast-error">
        @foreach ($errors->all() as $error)
        <span>{{$error}}</span><br />
        @endforeach
    </div>
    @endif
    <form method="POST" action="{{route('cities.store')}}">
        @csrf
        <div class="form-group">
            @include('cities.form')
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Store City</button>
            <a href="{{route('cities.index')}}">Cancel</a>
        </div>
    </form>
</div>
@endsection