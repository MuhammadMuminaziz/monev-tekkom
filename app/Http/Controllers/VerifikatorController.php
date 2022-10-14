<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\School;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class VerifikatorController extends Controller
{
    public function school()
    {
        return view('verifikator.school');
    }

    public function schoolVerify(School $school)
    {
        $school->update([
            'isActive'      => 1
        ]);
        return back()->with('message', 'Sekolah berhasil di verifikasi..');
    }

    public function schoolReject(School $school)
    {
        $school->update([
            'isActive'      => 2
        ]);
        return back()->with('message', 'Sekolah berhasil di tolak..');
    }

    public function teacher()
    {
        $periode = Periode::first();
        return view('verifikator.teacher', [
            'teachers' => Teacher::where('periode', $periode->year)->where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function show(School $school)
    {
        return view('verifikator.school-show', [
            'school' => $school,
        ]);
    }
}
