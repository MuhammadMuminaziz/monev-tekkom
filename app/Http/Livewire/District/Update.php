<?php

namespace App\Http\Livewire\District;

use App\Models\City;
use App\Models\District;
use Livewire\Component;
use Illuminate\Support\Str;

class Update extends Component
{
    public $district_id;
    public $city_id;
    public $name;

    public $listeners = [
        'getDistrict' => 'handleDistrict'
    ];

    public function render()
    {
        return view('livewire.district.update', [
            'cities' => City::orderBy('name', 'asc')->get()
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3|max:255|unique:districts,name,' . $this->district_id,
        ]);

        $slug = $this->uniqueSlug($this->name);

        $district = District::find($this->district_id)->update([
            'city_id' => $this->city_id,
            'name' => $this->name,
            'slug' => $slug
        ]);

        $this->resetInput();
        $this->emit('updateDistrict', $district);
    }

    public function handleDistrict($district)
    {
        $this->district_id = $district['id'];
        $this->city_id = $district['city_id'];
        $this->name = $district['name'];
    }

    private function resetInput()
    {
        $this->city_id = null;
        $this->name = null;
    }

    public function censelUpdate()
    {
        $this->emit('censelUpdate');
    }

    protected function uniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = District::where('slug', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }
}
