@extends('layouts.master')

@section('content')
<div class="container-fluid mt-4">

    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">User Management</h3>
            <a href="{{ route('admin.users.create') }}" class="btn btn-light btn-sm">
                <i class="fas fa-user-plus me-1 mr-2"></i> Add User
            </a>
        </div>
        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td class="text-start">{{ $user->name }}</td>
                            <td class="text-start">{{ $user->full_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->age }}</td>
                         
                           <td class="text-nowrap">
                                <!-- Show -->
                                <a href="{{ route('admin.users.show', $user->id) }}" 
                                   class="btn btn-sm btn-info me-1" 
                                   title="View User">
                                    <i class="fas fa-eye"></i>
                                </a>
                            
                                <!-- Edit -->
                                <a href="{{ route('admin.users.edit', $user->id) }}" 
                                   class="btn btn-sm btn-warning me-1" 
                                   title="Edit User">
                                    <i class="fas fa-edit"></i>
                                </a>
                            
                                <!-- Delete -->
                                <form action="{{ route('admin.users.destroy', $user->id) }}" 
                                      method="POST" 
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn btn-sm btn-danger"
                                            title="Delete User"
                                            onclick="return confirm('Are you sure you want to delete this user?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
