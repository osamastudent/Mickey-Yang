@extends('layouts.master')

@section('content')
<div class="container-fluid mt-4">

    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0"><i class="fas fa-user-plus me-2"></i>Add User</h3>
            <a href="{{ route('admin.users.index') }}" class="btn btn-light btn-sm">
                <i class="fas fa-arrow-left me-1 mr-2"></i> Back to Users
            </a>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Whoops!</strong> Please fix the following errors:
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Age</label>
                        <input type="number" name="age" class="form-control" value="{{ old('age') }}">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Height (cm)</label>
                        <input type="number" name="height" class="form-control" value="{{ old('height') }}">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Weight (kg)</label>
                        <input type="number" name="weight" class="form-control" value="{{ old('weight') }}">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Activity Level</label>
                        <select name="activity_level" class="form-select form-control ">
                            <option value="">Select</option>
                            <option value="Sedentary" {{ old('activity_level') == 'Sedentary' ? 'selected' : '' }}>Sedentary</option>
                            <option value="Lightly active" {{ old('activity_level') == 'Lightly active' ? 'selected' : '' }}>Lightly active</option>
                            <option value="Moderately active" {{ old('activity_level') == 'Moderately active' ? 'selected' : '' }}>Moderately active</option>
                            <option value="Highly active" {{ old('activity_level') == 'Highly active' ? 'selected' : '' }}>Highly active</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Sleep Goals</label>
                        <input type="text" name="sleep_goals" class="form-control" value="{{ old('sleep_goals') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Wake Up Time</label>
                        <input type="time" name="wake_up_time" class="form-control" value="{{ old('wake_up_time') }}">
                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-end">
                    <button type="submit" class="btn btn-success me-2">
                        <i class="fas fa-plus me-1"></i> Add User
                    </button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times me-1"></i> Cancel
                    </a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
