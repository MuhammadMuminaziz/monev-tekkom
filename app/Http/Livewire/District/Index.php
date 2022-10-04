<?php

namespace App\Http\Livewire\District;

use App\Models\District;
use Livewire\Component;

class Index extends Component
{
    public $isUpdate = false;

    public $listeners = [
        'insertNewDistrict' => 'handleDistrict',
        'updateDistrict' => 'handleUpdate',
        'censelUpdate' => 'handleCensel'
    ];

    public function render()
    {
        return view('livewire.district.index', [
            'districts' => District::with('city')->latest()->get()
        ]);
    }

    public function destroy(District $district)
    {
        $district->delete();
        session()->flash('message', 'the field has been deleted..');
    }

    public function getDistrict(District $district)
    {
        $this->isUpdate = true;
        $this->emit('getDistrict', $district);
    }

    public function handleDistrict($district)
    {
        session()->flash('message', 'the field has been added..');
    }

    public function handleUpdate($district)
    {
        session()->flash('message', 'the field has been updated..');
    }

    public function handleCensel()
    {
        $this->isUpdate = false;
    }
}
