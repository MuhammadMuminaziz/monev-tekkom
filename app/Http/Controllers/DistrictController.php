<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DistrictController extends Controller
{
    public function index()
    {
        return view('district.index',  [
            'cities'    => City::orderBy('name', 'asc')->get(),
            'districts' => District::with('city')->latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'city_id'   => 'required',
            'name'      => 'required|unique:districts'
        ]);

        $periode = Periode::first();
        $data['slug']       = $this->uniqueSlug($request->name);
        $data['periode']    = $periode->year;

        District::create($data);
        return redirect()->back()->with('message', 'Data Kecamatan berhasil ditambahkan..');
    }

    public function edit(Request $request)
    {
        $periode = Periode::first();
        return view('district.edit', [
            'cities'    => City::where('periode', $periode->year)->orderBy('name', 'asc')->get(),
            'district' => District::find($request->id)
        ]);
    }

    public function update(Request $request, District $district)
    {
        $data = $request->validate([
            'city_id'      => 'required',
            'name'      => 'required|unique:cities,name,' . $district->id,
        ]);

        if ($district->name != $request->name) {
            $data['slug'] = $this->uniqueSlug($request->name);
        }

        $district->update($data);
        return redirect()->route('district.index')->with('message', 'Data Kecamatan berhasil di edit..');
    }

    public function destroy(District $district)
    {
        $district->delete();
        return redirect()->back()->with('message', 'Data Kecamatan berhasil dihapus..');
    }

    protected function uniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = District::where('slug', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }
}
