@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Add User</h1>
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">        
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="{{ old('age') }}">
        </div>
        <div class="mb-3">
            <label>Height (cm)</label>
            <input type="number" name="height" class="form-control" value="{{ old('height') }}">
        </div>
        <div class="mb-3">
            <label>Weight (kg)</label>
            <input type="number" name="weight" class="form-control" value="{{ old('weight') }}">
        </div>
        <div class="mb-3">
            <label>Activity Level</label>
            <select name="activity_level" class="form-control">
                <option value="">Select</option>
                <option value="Sedentary">Sedentary</option>
                <option value="Lightly active">Lightly active</option>
                <option value="Moderately active">Moderately active</option>
                <option value="Highly active">Highly active</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Sleep Goals</label>
            <input type="text" name="sleep_goals" class="form-control" value="{{ old('sleep_goals') }}">
        </div>
        <div class="mb-3">
            <label>Wake Up Time</label>
            <input type="time" name="wake_up_time" class="form-control" value="{{ old('wake_up_time') }}">
        </div>
        <button type="submit" class="btn btn-success">Add User</button>
    </form>
</div>
@endsection
