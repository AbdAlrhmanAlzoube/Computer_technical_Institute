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
                        <h6 class="card-title">Edit Teacher</h6>

                        <form class="forms-sample" action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') {{-- Use PUT method for update --}}
                            
                            <div class="mb-3">
                                <label for="teacher_number" class="form-label">Teacher Number</label>
                                <input type="text" name="teacher_number" class="form-control" placeholder="Enter Teacher Number" value="{{ $teacher->teacher_number }}">
                            </div>
                            <div class="mb-3">
                                <label for="teacher_name" class="form-label">Teacher Name</label>
                                <input type="text" name="teacher_name" class="form-control" placeholder="Enter Teacher Name" value="{{ $teacher->teacher_name }}">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" value="{{ $teacher->phone }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email Address" value="{{ $teacher->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="{{ $teacher->subject }}">
                            </div>
                            <div class="mb-3">
                                <label for="contract_type" class="form-label">Contract Type</label>
                                <input type="text" name="contract_type" class="form-control" placeholder="Enter Contract Type" value="{{ $teacher->contract_type }}">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                @if ($teacher->image)
                                    <img src="{{ asset('path/to/your/images/' . $teacher->image) }}" alt="Teacher Image" width="50">
                                @else
                                    No Image
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div>
@endsection
