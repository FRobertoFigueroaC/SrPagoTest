<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use Illuminate\Http\Request;

class MinucipalitiesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        $stateId = $request->stateId;
        $municipalities = Municipality::when($stateId, function ($query, $stateId) {
            return $query->where('state_id', $stateId);
        })
        ->orderBy('name')->get();

        return  response()->json([
            "success" => false,
            "results" => $municipalities->toArray(),
        ]);
    }
}
