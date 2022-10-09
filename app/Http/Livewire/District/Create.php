<?php

namespace App\Http\Livewire\District;

use App\Models\City;
use App\Models\District;
use App\Models\Periode;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $city_id;
    public $name;

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3|max:255|unique:districts'
        ]);

        $slug = $this->uniqueSlug($this->name);
        $periode = Periode::first();
        $district = District::create([
            'city_id' => $this->city_id,
            'name' => $this->name,
            'slug' => $slug,
            'periode' => $periode->year
        ]);

        $this->resetInput();
        $this->emit('insertNewDistrict', $district);
    }

    public function render()
    {
        $periode = Periode::first();
        return view('livewire.district.create', [
            'cities' => City::where('periode', $periode->year)->orderBy('name', 'asc')->get()
        ]);
    }

    public function resetInput()
    {
        $this->name = null;
    }

    protected function uniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = District::where('slug', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }
}
