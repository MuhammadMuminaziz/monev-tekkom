<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use Livewire\Component;
use Illuminate\Support\Str;

class Update extends Component
{
    public $cityId;
    public $name;

    public $listeners = [
        'getCity' => 'handleGetCity'
    ];

    public function render()
    {
        return view('livewire.city.update');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:3|max:255|unique:cities,name,' . $this->cityId,
        ]);

        $slug = $this->uniqueSlug($this->name);

        $city = City::find($this->cityId)->update([
            'name' => $this->name,
            'slug' => $slug
        ]);

        $this->resetInput();
        $this->emit('updateCity', $city);
    }

    public function handleGetCity($city)
    {
        $this->cityId = $city['id'];
        $this->name = $city['name'];
    }

    private function resetInput()
    {
        $this->name = null;
    }

    public function censelUpdate()
    {
        $this->emit('censelUpdate');
    }

    protected function uniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = City::where('slug', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }
}
