<?php

namespace App\Http\Livewire\Teacher;

use App\Models\District;
use App\Models\Periode;
use App\Models\School;
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
            'teachersNotActived'    => Teacher::with('school')->where('isActive', 0)->where('periode', $periode->year)->whereIn('district_id', $user)->orderBy('school_id', 'asc')->get(),
            'teachersActived'       => Teacher::with('school')->where('isActive', 1)->where('periode', $periode->year)->whereIn('district_id', $user)->orderBy('school_id', 'asc')->get(),
            'schools'               => School::where('periode', $periode->year)->where('isActive', 1)->orderBy('name', 'asc')->get()
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
