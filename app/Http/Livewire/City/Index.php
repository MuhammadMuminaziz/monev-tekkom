<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use Livewire\Component;

class Index extends Component
{
    public $statusUpdate = false;

    protected $listeners = [
        'insertNewCity' => 'createCity',
        'updateCity' => 'updateCity',
        'censelUpdate' => 'censelUpdate'
    ];

    public function render()
    {
        return view('livewire.city.index', ['cities' => City::latest()->get()]);
    }

    public function createCity($city)
    {
        session()->flash('message', $city['name'] . ' has been added..');
    }

    public function updateCity($city)
    {
        $this->statusUpdate = false;
        session()->flash('message', 'field has been updated..');
    }

    public function destroy(City $city)
    {
        $city->delete();
        session()->flash('message', $city['name'] . ' has been deleted..');
    }

    public function getCity(City $city)
    {
        $this->statusUpdate = true;
        $this->emit('getCity', $city);
    }

    public function censelUpdate()
    {
        $this->statusUpdate = false;
    }
}
