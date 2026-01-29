<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    // Step 1: Send password reset link
  public function sendResetLink(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|exists:users,email',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ], 422);
    }

    $email = $request->email;

    // Generate token
    $token = Str::random(64);

    // Store token in password_resets table
    DB::table('password_resets')->updateOrInsert(
        ['email' => $email],
        [
            'token' => Hash::make($token),
            'created_at' => now()
        ]
    );

    // Return token in API response (no email)
    return response()->json([
        'success' => true,
        'message' => 'Password reset token generated.',
        'data' => [
            'token' => $token,
            'email' => $email
        ]
    ]);
}


    // Step 2: Reset the password
    public function resetPassword(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|exists:users,email',
        'token' => 'required|string',
        'password' => 'required|string|min:6|confirmed',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ], 422);
    }

    // Get the password reset record
    $reset = DB::table('password_resets')->where('email', $request->email)->first();

    if (!$reset || !Hash::check($request->token, $reset->token)) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid token.'
        ], 400);
    }

    // Update user password
    $user = User::where('email', $request->email)->first();
    $user->password = Hash::make($request->password);
    $user->save();

    // Delete token after use
    DB::table('password_resets')->where('email', $request->email)->delete();

    return response()->json([
        'success' => true,
        'message' => 'Password reset successfully.'
    ]);
}

}
