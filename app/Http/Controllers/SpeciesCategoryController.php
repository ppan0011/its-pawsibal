<?php

namespace App\Http\Controllers;

use App\SpeciesCategory;
use Illuminate\Http\Request;

class SpeciesCategoryController extends Controller
{
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

    public function searchSuburb(Request $request)
    {
        $suburb = $request->suburb;
        $data = SpeciesCategory::where('suburbs', 'like', $suburb."%")->distinct()->get(['suburbs']);
        return response($data);
    }    
}