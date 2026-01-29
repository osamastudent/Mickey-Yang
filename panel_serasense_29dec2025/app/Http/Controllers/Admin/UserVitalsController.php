<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\UserVital;

class UserVitalsController extends Controller
{
    
  public function index(Request $request)
{
    $query = UserVital::with('user')
        ->select(
            'user_id',
            'blood_pressure',
            'heart_rate',
            'sweat_rate',
            'sleep_rate',
            'created_at'
        );

    // User filter
    if ($request->filled('user_id')) {
        $query->where('user_id', $request->user_id);
    }

    // Date range filter
    if ($request->filled('from_date')) {
        $query->whereDate('created_at', '>=', $request->from_date);
    }

    if ($request->filled('to_date')) {
        $query->whereDate('created_at', '<=', $request->to_date);
    }

    // Time filter
    if ($request->filled('time')) {
        $query->whereTime('created_at', $request->time);
    }

    $vitals = $query->orderBy('created_at', 'desc')->get();

    $users = User::select('id', 'name')->get();

    return view('admin.user-vitals.index', compact('vitals', 'users'));
}


}

