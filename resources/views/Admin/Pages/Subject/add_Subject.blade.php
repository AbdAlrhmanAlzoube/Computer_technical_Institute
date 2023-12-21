@extends('admin.admin_dashboard')

@section('content')
    <div class="page-content">
        @if($errors->has('error'))
            <div class="alert alert-danger">
                {{ $errors->first('error') }}
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add Subject</h6>

                        <form class="forms-sample" action="{{ route('subjects.store') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="subject_name" class="form-label">Subject Name</label>
                                <input type="text" name="subject_name" class="form-control" placeholder="Enter Subject Name">
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
                                <label for="year" class="form-label">Year</label>
                                <input type="text" name="year" class="form-control" placeholder="Enter Year">
                            </div>
                            <div class="mb-3">
                                <label for="department" class="form-label">Department</label>
                                <input type="text" name="department" class="form-control" placeholder="Enter Department">
                            </div>
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester</label>
                                <input type="text" name="semester" class="form-control" placeholder="Enter Semester">
                            </div>
                        
                            <button type="submit" class="btn btn-primary me-2">Save</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div>
@endsection
