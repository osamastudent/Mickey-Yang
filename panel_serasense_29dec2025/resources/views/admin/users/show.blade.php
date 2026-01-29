@extends('layouts.master')

@section('content')

<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 text-gray-800 mb-0">User Details</h1>
        <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back
        </a>
    </div>

    <div class="row">

        <!-- User Overview -->
        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-primary text-white mx-auto mb-3"
                         style="width:80px;height:80px;display:flex;align-items:center;justify-content:center;font-size:32px;">
                        {{ strtoupper(substr($user->full_name ?? $user->name, 0, 1)) }}
                    </div>

                    <h5 class="mb-1">{{ $user->full_name ?? $user->name }}</h5>
                    <p class="text-muted mb-2">{{ $user->email }}</p>

                    <span class="badge bg-success text-white">Active</span>
                </div>
            </div>
        </div>

        <!-- User Information -->
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary">
                    <h6 class="mb-0 text-white">Profile Information</h6>
                </div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4 text-muted">Age</div>
                        <div class="col-md-8 fw-semibold">
                            {{ $user->age ?? 'N/A' }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 text-muted">Activity Level</div>
                        <div class="col-md-8 fw-semibold">
                            {{ ucfirst($user->activity_level ?? 'N/A') }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 text-muted">Height</div>
                        <div class="col-md-8 fw-semibold">
                            {{ $user->height ? $user->height . ' cm' : 'N/A' }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 text-muted">Weight</div>
                        <div class="col-md-8 fw-semibold">a
                            {{ $user->weight ? $user->weight . ' kg' : 'N/A' }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 text-muted">Sleep Goal</div>
                        <div class="col-md-8 fw-semibold">
                            {{ $user->sleep_goals ? $user->sleep_goals . ' hours' : 'N/A' }}
                        </div>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm me-2">
                            <i class="fas fa-edit me-1 mr-2"></i> Edit
                        </a>

                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm ml-2"
                                onclick="return confirm('Are you sure you want to delete this user?')">
                                <i class="fas fa-trash-alt me-1"></i> Delete
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
