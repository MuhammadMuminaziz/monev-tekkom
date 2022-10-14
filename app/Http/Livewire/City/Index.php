<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use App\Models\Periode;
use Livewire\Component;

class Index extends Component
{
    public $statusUpdate = false;
    public $name;
    public $code;
    public $periode;

    // protected $listeners = [
    //     'insertNewCity' => 'createCity',
    //     'updateCity' => 'updateCity',
    //     'censelUpdate' => 'censelUpdate'
    // ];

    public function render()
    {
        $periode = Periode::first();
        return view('livewire.city.index', ['cities' => City::where('periode', $periode->year)->orderBy('name', 'asc')->get()]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3|max:255|unique:cities',
            'code' => 'required|unique:cities'
        ]);

        $slug = $this->uniqueSlug($this->name);
        $this->periode = Periode::first();
        $data = [
            'name' => $this->name,
            'slug' => $slug,
            'code' => $this->code,
            'periode' => $this->periode->year
        ];
        dd($data);
        City::create($data);
        session()->flash('message', 'Kota berhasil ditambahkan..');
        $this->resetInput();
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
