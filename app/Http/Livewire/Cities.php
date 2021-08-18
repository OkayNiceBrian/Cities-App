<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cities extends Component
{
    public $search = '';
    public $sortBy = 'name';
    public $direction = 'asc';
    protected $updatesQueryString = [
        'search' => ['except' => ''],
        'sortBy' => ['except' => ''],
        'direction' => ['except' => '']
    ];

    public function mount(){
        $this->search = request()->query('search', $this->search);
        $this->sortBy = request()->query('sortBy', $this->sortBy);
        $this->direction = request()->query('direction', $this->direction);

    }

    public function doSort($field, $dir){
        $this->sortBy = $field;
        $this->direction = $dir;
    }

    public function render()
    {
        $cities = \App\City::where('name', 'like', "%$this->search%")
            ->orWhere('state', 'like', "%$this->search%")
            ->orderBy($this->sortBy, $this->direction);

        return view('livewire.cities', ['cities' => $cities->get()]);
    }
}
