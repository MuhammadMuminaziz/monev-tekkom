<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\Tahun;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        $data = Tahun::orderBy('name', 'desc')->first();
        if ($data->name != date('Y')) {
            $y = $data->name + 1;
            Tahun::create(['name' => $y]);
        }

        return view('periode.index', [
            'periode' => Periode::first(),
            'years' => Tahun::get()
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
