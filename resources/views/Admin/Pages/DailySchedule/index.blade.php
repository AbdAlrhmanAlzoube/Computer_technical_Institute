@extends('admin.admin_dashboard')

@section('content')

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Daily Schedules</h6>

                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Subject</th>
                                <th>Teacher</th>
                                <th>Location</th>
                                <th>Department</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dailySchedules as $dailySchedule)
                                <tr>
                                    <td>{{ $dailySchedule->day_name }}</td>
                                    <td>{{ $dailySchedule->subject->subject_name }}</td>
                                    <td>{{ $dailySchedule->teacher->teacher_name }}</td>
                                    <td>{{ $dailySchedule->location }}</td>
                                    <td>{{ $dailySchedule->department }}</td>
                                    <td>{{ $dailySchedule->start_time }}</td>
                                    <td>{{ $dailySchedule->end_time }}</td>
                                    <td>
                                        <a href="{{ route('dailySchedules.edit', $dailySchedule->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('dailySchedules.destroy', $dailySchedule->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this daily schedule?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div> <!-- row -->

</div>
@endsection
