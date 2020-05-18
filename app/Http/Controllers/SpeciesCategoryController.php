<?php

namespace App\Http\Controllers;

use App\SpeciesCategory;
use Illuminate\Http\Request;

class SpeciesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SpeciesCategory  $speciesCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SpeciesCategory $speciesCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SpeciesCategory  $speciesCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SpeciesCategory $speciesCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SpeciesCategory  $speciesCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpeciesCategory $speciesCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SpeciesCategory  $speciesCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpeciesCategory $speciesCategory)
    {
        //
    }

    public function getRecordsByRegion()
    {
        $data = SpeciesCategory::where('region', 'VIC')->paginate(12);
        return response()->json($data);
    }

    public function getRecordsBySpecies(Request $request)
    {
        $suburb = $request->suburb;
        $data = SpeciesCategory::where('suburbs', 'like', $suburb)->paginate(9);
        return response()->json($data);
    }
}