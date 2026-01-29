@extends('layouts.master')

@section('content')

<style>
    .card {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        padding: 20px;
        margin-top: 20px;
    }

    .card-header {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead th {
        background-color: #f8f9fa;
        font-weight: 600;
        font-size: 14px;
        color: #333;
        border: 1px solid #dee2e6;
        padding: 12px;
        text-align: center;
    }

    tbody td {
        border: 1px solid #dee2e6;
        padding: 10px;
        font-size: 14px;
        text-align: center;
        color: #555;
    }

    tbody tr:hover {
        background-color: #f9f9f9;
    }
</style>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Users Vitals Data
        </div>


<form method="GET" action="{{ route('admin.users.vitals') }}" class="row g-3 mb-3">

    <div class="col-md-3">
        <label class="form-label">User</label>
        <select name="user_id" class="form-control">
            <option value="">All Users</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}"
                    {{ request('user_id') == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-3">
        <label class="form-label">From Date</label>
        <input type="date" name="from_date" class="form-control"
               value="{{ request('from_date') }}">
    </div>

    <div class="col-md-3">
        <label class="form-label">To Date</label>
        <input type="date" name="to_date" class="form-control"
               value="{{ request('to_date') }}">
    </div>

    <div class="col-md-2">
        <label class="form-label">Time</label>
        <input type="time" name="time" class="form-control"
               value="{{ request('time') }}">
    </div>

    <div class="col-md-1 d-flex align-items-end">
        <button class="btn btn-primary w-100">Filter</button>
    </div>

</form>

        <div class="table-responsive mt-5">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Blood Pressure</th>
                        <th>Heart Rate</th>
                        <th>Sweat Rate</th>
                        <th>Sleep Rate</th>
                        <th>Recorded at Day</th>
                        <th>Recorded at Time</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($vitals as $key => $vital)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $vital->user->name }}</td>
                            <td>{{ $vital->blood_pressure }}</td>
                            <td>{{ $vital->heart_rate }}</td>
                            <td>{{ $vital->sweat_rate }}</td>
                            <td>{{ $vital->sleep_rate }}</td>
                            <td>{{ $vital->created_at->format('d-m-Y') }}</td>
                            <td>{{ $vital->created_at->format('H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">
                                @if(request()->hasAny(['user_id','from_date','to_date','time']))
                                    No records found for selected filters
                                @else
                                    No records available
                                @endif
                            </td>
                        </tr>
                    @endforelse
                </tbody>
                
                
                
                            </table>
                        </div>
    </div>
</div>

@endsection
