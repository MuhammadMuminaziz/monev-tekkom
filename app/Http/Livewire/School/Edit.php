<?php

namespace App\Http\Livewire\School;

use App\Models\Periode;
use App\Models\School;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        $periode = Periode::first();
        $user = User::find(auth()->user()->id)->districts->pluck('id');
        return view('livewire.school.edit', [
            'schools' => School::where('isActive', 0)->where('periode', $periode->year)->whereIn('district_id', $user)->get(),
        ]);
    }

    public function verify(School $school, $slug)
    {
        // $school = School::where('slug', $slug)->first();
        dd($school);
        $school->update([
            'isActive' => 1
        ]);

        session()->flash('message', 'Data berhasil di verifikasi..');
    }

    public function reject(School $school)
    {
        $school->update([
            'isActive' => 2
        ]);

        session()->flash('message', 'Data berhasil di tolak..');
    }
}
