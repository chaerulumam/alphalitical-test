<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SummarizeResource;
use App\Models\Summarize;
use Illuminate\Http\Request;

class SummarizeController extends Controller
{
    public function getSummarizeByDate(Request $request)
    {
        // validation
        $request->validate([
            'date' => 'required|date'
        ]);

        // parameter by Date
        $date = $request->input('date');

        // get data by Date
        $summarizeData = Summarize::where('date', $date)->get();

        // check if data is empty
        if ($summarizeData->isEmpty()) {
            // check when data not found
            return response()->json(['message' => 'Data not found.'], 404);
        } else {
            // if success, data will be send in JSON format
            return SummarizeResource::collection($summarizeData);
        }
    }
}
