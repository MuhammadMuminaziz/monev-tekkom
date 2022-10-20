<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('city.index', ['cities' => City::orderBy('name', 'asc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3|max:255|unique:cities',
        ]);

        $data['slug']       = $this->uniqueSlug($request->name);
        City::create($data);
        return redirect()->back()->with('message', 'Data Kota berhasil ditambahkan..');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $data = $request->validate([
            'name'      => 'required|unique:cities,name,' . $city->id,
        ]);

        if ($city->name != $request->name) {
            $data['slug'] = $this->uniqueSlug($request->name);
        }

        $city->update($data);
        return redirect()->route('cities.index')->with('message', 'Data Kota berhasil di edit..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        District::where('city_id', $city->id)->delete();
        return redirect()->back()->with('message', 'Data Kota berhasil dihapus..');
    }

    public function editCity(Request $request)
    {
        return view('city.edit', [
            'city' => City::find($request->id)
        ]);
    }

    protected function uniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = City::where('slug', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }
}
