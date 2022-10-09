<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use App\Models\Periode;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $name;
    public $periode;

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3|max:255|unique:cities'
        ]);

        $slug = $this->uniqueSlug($this->name);
        $this->periode = Periode::first();
        $data = [
            'name' => $this->name,
            'slug' => $slug,
            'periode' => $this->periode->year
        ];
        // dd($data);
        $city = City::create($data);

        $this->resetInput();
        $this->emit('insertNewCity', $city);
    }

    public function render()
    {
        return view('livewire.city.create');
    }

    private function resetInput()
    {
        $this->name = null;
    }

    protected function uniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = City::where('slug', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }
}
