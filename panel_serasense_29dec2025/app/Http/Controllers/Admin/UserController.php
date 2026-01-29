<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // List all users
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // Show create form
    public function create()
    {
        return view('admin.users.create');
    }

    // Store new user
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'full_name'=>'nullable|string|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|min:6|confirmed',
            'age'=>'nullable|integer|min:1|max:150',
            'height'=>'nullable|numeric|min:30|max:300',
            'weight'=>'nullable|numeric|min:1|max:500',
            'activity_level'=>'nullable|in:Sedentary,Lightly active,Moderately active,Highly active',
            'sleep_goals'=>'nullable|string|max:50',
            'wake_up_time'=>'nullable|date_format:H:i',
        ]);

        User::create([
            'name'=>$request->name,
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'age'=>$request->age,
            'height'=>$request->height,
            'weight'=>$request->weight,
            'activity_level'=>$request->activity_level,
            'sleep_goals'=>$request->sleep_goals,
            'wake_up_time'=>$request->wake_up_time,
        ]);

        return redirect()->route('admin.users.index')->with('success','User created successfully.');
    }

    // Show edit form
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    // Update user
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name'=>'required|string|max:255',
            'full_name'=>'nullable|string|max:255',
            'email'=>'required|email|unique:users,email,'.$user->id,
            'password'=>'nullable|string|min:6|confirmed',
            'age'=>'nullable|integer|min:1|max:150',
            'height'=>'nullable|numeric|min:30|max:300',
            'weight'=>'nullable|numeric|min:1|max:500',
            'activity_level'=>'nullable|in:Sedentary,Lightly active,Moderately active,Highly active',
            'sleep_goals'=>'nullable|string|max:50',
            'wake_up_time'=>'nullable|date_format:H:i',
        ]);

        $user->name = $request->name;
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->age = $request->age;
        $user->height = $request->height;
        $user->weight = $request->weight;
        $user->activity_level = $request->activity_level;
        $user->sleep_goals = $request->sleep_goals;
        $user->wake_up_time = $request->wake_up_time;
        $user->save();

        return redirect()->route('admin.users.index')->with('success','User updated successfully.');
    }
    
     public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    // Delete user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success','User deleted successfully.');
    }
}
