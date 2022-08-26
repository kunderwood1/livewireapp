<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\City;

class Cities extends Component
{

    public $search = "";
    protected $queryString = ["search"=>['except'=>'']];

    public $sortBy = 'name';
    public $direction = 'asc';

    public function doSort($field, $direction) {
        $this->sortBy = $field;
        $this->direction = $direction;
    }

    public function render()
    {
        $cities = City::where('name', 'like', "%$this->search%")
                ->orwhere('state', 'like', "%$this->search%")
                ->orderby($this->sortBy, $this->direction);
        return view('livewire.cities', ['cities' => $cities->get()]);
    }
}
