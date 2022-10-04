<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\Year;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        $data = Year::orderBy('name', 'desc')->first();
        if ($data->name != date('Y')) {
            $y = $data->name + 1;
            Year::create(['name' => $y]);
        }

        return view('periode.index', [
            'periode' => Periode::first(),
            'years' => Year::get()
        ]);
    }

    public function update(Request $request)
    {
        Periode::where('id', 1)->update([
            'year' => $request->name
        ]);

        return redirect()->back()->with('success', 'Periode has been changed..');
    }
}
