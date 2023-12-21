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
                    <h6 class="card-title">Edit Subject</h6>

                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form class="forms-sample" action="{{ route('subjects.update', $subject->id) }}" method="POST">
                        @csrf
                        @method('PUT') {{-- Use PUT method for update --}}
                        <div class="mb-3">
                            <label for="subject_name" class="form-label">Subject Name</label>
                            <input type="text" name="subject_name" class="form-control" placeholder="Enter Subject Name" value="{{ $subject->subject_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="teacher_id" class="form-label">Teacher</label>
                            <select name="teacher_id" class="form-control">
                                <option value="" disabled>Select Teacher</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}" {{ $subject->teacher_id == $teacher->id ? 'selected' : '' }}>
                                        {{ $teacher->teacher_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="year" class="form-label">Year</label>
                            <input type="text" name="year" class="form-control" placeholder="Enter Year" value="{{ $subject->year }}">
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">Department</label>
                            <input type="text" name="department" class="form-control" placeholder="Enter Department" value="{{ $subject->department }}">
                        </div>
                        <div class="mb-3">
                            <label for="semester" class="form-label">Semester</label>
                            <input type="text" name="semester" class="form-control" placeholder="Enter Semester" value="{{ $subject->semester }}">
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div> <!-- row -->

</div>
@endsection
