<?php

namespace App\Http\Controllers;

use App\SuburbAffected;
use Illuminate\Http\Request;

class SuburbAffectedController extends Controller
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
     * @param  \App\SuburbAffected  $suburbAffected
     * @return \Illuminate\Http\Response
     */
    public function show(SuburbAffected $suburbAffected)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuburbAffected  $suburbAffected
     * @return \Illuminate\Http\Response
     */
    public function edit(SuburbAffected $suburbAffected)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuburbAffected  $suburbAffected
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuburbAffected $suburbAffected)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuburbAffected  $suburbAffected
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuburbAffected $suburbAffected)
    {
        //
    }

    public function getRecordsBySuburbs(Request $request)
    {
        $suburb = $request->suburb;

        $data = SuburbAffected::where('suburb', 'like', $suburb)->get();
        return response()->json($data);
    }
}
