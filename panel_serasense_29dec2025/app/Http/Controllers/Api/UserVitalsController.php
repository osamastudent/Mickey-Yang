<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserVitalsController extends Controller
{
    public function storeVitals(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'user_id'         => 'required|integer',
            'blood_pressure'  => 'required|string|max:10',
            'heart_rate'      => 'required|integer',
            'sweat_rate'      => 'required|numeric',
            'sleep_rate'      => 'required|numeric'
        ]);

        // Insert data (optimized insert)
        DB::table('user_vitals')->insert([
            'user_id'        => $validated['user_id'],
            'blood_pressure' => $validated['blood_pressure'],
            'heart_rate'     => $validated['heart_rate'],
            'sweat_rate'     => $validated['sweat_rate'],
            'sleep_rate'     => $validated['sleep_rate'],
            'created_at'     => now(),
            'updated_at'     => now()
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'User vitals stored successfully'
        ], 201);
    }
}




