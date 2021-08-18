<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = request();

        $cities = \App\City::paginate(25);
        
        if ($request->has('sort')){
            $sortby = $request->query('sort');
            if ($sortby == 'name'){
                $cities = \App\City::orderBy('name', 'ASC')->paginate(25);
            }
            else if ($sortby == 'state'){
                $cities = \App\City::orderBy('state', 'ASC')->paginate(25);
            }
            else if ($sortby == 'population'){
                $cities = \App\City::orderBy('population_2010', 'DESC')->paginate(25);
            }
            else if ($sortby == 'rank'){
                $cities = \App\City::orderBy('population_rank', 'ASC')->paginate(25);
            }
        }

        return view('cities.index', ['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = new \App\City;
        return view('cities.create', ['city' => $city]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        \App\City::create($this->validateData($request));

        // Valid and Created
        return redirect()->route('cities.index')->with('success', 'City was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = \App\City::findOrFail($id);
        return view('cities.show', ['city' => $city]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = \App\City::findOrFail($id);
        return view('cities.edit', ['city' => $city]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        \App\City::find($id)->update($this->validateData($request));

        // Valid and Created
        return redirect()->route('cities.index')->with('success', 'City was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = \App\City::find($id);
        $city->delete();

        return redirect()->route('cities.index')->with('success', 'City was deleted');
    }

    private function validateData($request){
        return $request->validate([
            'name' => 'required',
            'state' => 'required',
            'population_2010' => 'integer',
            'population_rank' => 'integer'
        ]);
    }
}
