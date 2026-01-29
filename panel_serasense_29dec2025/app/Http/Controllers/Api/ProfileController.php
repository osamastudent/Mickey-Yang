<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'age' => 'required|integer|min:1|max:150',
            'height' => 'required|numeric|min:30|max:300', // cm
            'weight' => 'required|numeric|min:1|max:500',  // kg
            'activity_level' => 'required|in:Sedentary,Lightly active,Moderately active,Highly active',
            'sleep_goals' => 'required|string|max:50',
            'wake_up_time' => 'required|date_format:H:i', // HH:mm
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $userId = $request->user_id;

        // Option 1: Eloquent update
        $user = User::find($userId);
        $user->age = $request->age;
        $user->height = $request->height;
        $user->weight = $request->weight;
        $user->activity_level = $request->activity_level;
        $user->sleep_goals = $request->sleep_goals;
        $user->wake_up_time = $request->wake_up_time;
        $user->save();

        // Option 2: Raw SQL update (uncomment to use)
        /*
        DB::update(
            "UPDATE users SET age = ?, height = ?, weight = ?, activity_level = ?, sleep_goals = ?, wake_up_time = ? WHERE id = ?",
            [
                $request->age,
                $request->height,
                $request->weight,
                $request->activity_level,
                $request->sleep_goals,
                $request->wake_up_time,
                $userId
            ]
        );
        */

        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully',
            'data' => $user
        ]);
    }
    
    public function viewProfile(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $userId = $request->user_id;

        // Fetch user profile
        $user = User::select(
            'id',
            'name',
            'age',
            'height',
            'weight',
            'activity_level',
            'sleep_goals',
            'wake_up_time'
        )->find($userId);

        return response()->json([
            'success' => true,
            'data' => $user
        ]);
    }
}



