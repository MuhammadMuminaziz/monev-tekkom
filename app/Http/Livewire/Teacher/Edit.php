<?php

namespace App\Http\Livewire\Teacher;

use App\Models\Periode;
use App\Models\Teacher;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        $periode = Periode::first();
        $user = User::find(auth()->user()->id)->districts->pluck('id');

        return view('livewire.teacher.edit', [
            'teachersNotActived' => Teacher::where('isActive', 0)->where('periode', $periode->year)->whereIn('district_id', $user)->get(),
            'teachersActived' => Teacher::where('isActive', 1)->where('periode', $periode->year)->whereIn('district_id', $user)->get(),
        ]);
    }

    public function verify(Teacher $teacher)
    {
        $teacher->update([
            'isActive' => 1
        ]);

        session()->flash('message', 'Teacher has been actived..');
    }
}
