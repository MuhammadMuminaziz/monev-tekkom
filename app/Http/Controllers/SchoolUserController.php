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
    public function __invoke(Request $request)
    {
        $periode = Periode::first();
        return view('school.user', [
            'schools' => School::where('periode', $periode->year)->orderBy('name', 'asc')->get()
        ]);
    }
}
