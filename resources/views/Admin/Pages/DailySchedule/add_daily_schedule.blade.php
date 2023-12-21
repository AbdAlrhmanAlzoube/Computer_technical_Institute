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
                    <h6 class="card-title">Add Daily Schedule</h6>

                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form class="forms-sample" action="{{ route('dailySchedules.store') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="day_name" class="form-label">Day Name</label>
                            <input type="text" name="day_name" class="form-control" placeholder="Enter Day Name">
                        </div>
                        <div class="mb-3">
                            <label for="subject_id" class="form-label">Subject</label>
                            <select name="subject_id" class="form-control">
                                <option value="" disabled selected>Select Subject</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="teacher_id" class="form-label">Teacher</label>
                            <select name="teacher_id" class="form-control">
                                <option value="" disabled selected>Select Teacher</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" name="location" class="form-control" placeholder="Enter Location">
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">Department</label>
                            <input type="text" name="department" class="form-control" placeholder="Enter Department">
                        </div>
                        <div class="mb-3">
                            <label for="start_time" class="form-label">Start Time</label>
                            <input type="text" name="start_time" class="form-control" placeholder="Enter Start Time">
                        </div>
                        <div class="mb-3">
                            <label for="end_time" class="form-label">End Time</label>
                            <input type="text" name="end_time" class="form-control" placeholder="Enter End Time">
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div> <!-- row -->

</div>
@endsection
