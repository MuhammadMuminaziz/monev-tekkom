<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class VerifikatorController extends Controller
{
    public function school()
    {
        return view('verifikator.school');
    }

    public function teacher()
    {
        return view('verifikator.teacher');
    }
}
