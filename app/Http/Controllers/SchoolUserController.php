<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolUserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('school.user', [
            'schools' => School::orderBy('name', 'asc')->get()
        ]);
    }

    public function show(School $school)
    {
        return view('school.user-show', compact('school'));
    }
}
