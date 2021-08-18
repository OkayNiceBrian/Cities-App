@extends('layout')

@section('content')
<div class="tile">
  <div class="tile-content">
    <p class="tile-title">{{ $city->name }}, {{ $city->state }}</p>
    <p class="tile-subtitle">Population: {{ $city->population_2010 }}
    <br />
    Population ranked {{ $city->population_rank }} in state.</p>
  </div>
</div>

<p>
<a href="{{ route('cities.index') }}">All Cities</a>
</p>
@endsection