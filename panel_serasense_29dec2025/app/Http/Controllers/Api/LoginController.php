<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
 public function login(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email'    => 'required|email',
        'password' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors'  => $validator->errors()
        ], 422);
    }

    $user = User::where('email', $request->email)->first();

    // Invalid email
    if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials'
        ], 401);
    }

    // Invalid password
    if (!Hash::check($request->password, $user->password)) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials'
        ], 401);
    }

    // ✅ Login success (NO TOKEN)
    return response()->json([
        'success' => true,
        'message' => 'Login successful',
        'data' => [
            'id'        => $user->id,
            'full_name' => $user->full_name,
            'email'     => $user->email
        ]
    ], 200);
}

}
