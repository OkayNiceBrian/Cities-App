@section('title')
Livewire Playground
@endsection
<div>
    <div>
        <button wire:click="decrement">-</button>
        {{$count}}
        <button wire:click="increment">+</button>
    </div>
    <br />
    <div>
        {{$message}}
        <br />
        <input wire:model="message" type="text" />
    </div>
</div>