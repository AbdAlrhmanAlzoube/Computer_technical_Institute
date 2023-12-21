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
                        <h6 class="card-title">Add Teacher</h6>

                        <form class="forms-sample" action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="teacher_number" class="form-label">Teacher Number</label>
                                <input type="text" name="teacher_number" class="form-control" autocomplete="off" placeholder="Enter Teacher Number">
                            </div>
                            <div class="mb-3">
                                <label for="teacher_name" class="form-label">Teacher Name</label>
                                <input type="text" name="teacher_name" class="form-control" autocomplete="off" placeholder="Enter Teacher Name">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter Email Address">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" name="subject" class="form-control" autocomplete="off" placeholder="Enter Subject">
                            </div>
                            <div class="mb-3">
                                <label for="contract_type" class="form-label">Contract Type</label>
                                <input type="text" name="contract_type" class="form-control" autocomplete="off" placeholder="Enter Contract Type">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Save</button>
                        </form>

                    </div>
                </div>
            </div>

        </div> <!-- row -->

    </div>
@endsection
