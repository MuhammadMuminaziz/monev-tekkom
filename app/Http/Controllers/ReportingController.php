<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Periode;
use Illuminate\Http\Request;

class ReportingController extends Controller
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
        return view('reporting.index', [
            'districts' => District::where('periode', $periode->year)->orderBy('name', 'asc')->get(),
            'cities' => City::where('periode', $periode->year)->orderBy('name', 'asc')->get(),
        ]);
    }
}
