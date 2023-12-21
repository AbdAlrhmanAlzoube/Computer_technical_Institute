@extends('admin.admin_dashboard')

@section('content')

@if(session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

@if(session('delete'))
<div class="alert alert-danger">
    {{ session('delete') }}
</div>
@endif

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
                    <h6 class="card-title">Subject List</h6>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Subject Name</th>
                                <th>Teacher</th>
                                <th>Year</th>
                                <th>Department</th>
                                <th>Semester</th>
                                <th>Actions</th> <!-- New column for actions -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                                <tr>
                                    <td>{{ $subject->subject_name }}</td>
                                    <td>{{ $subject->teacher->teacher_name }}</td>
                                    <td>{{ $subject->year }}</td>
                                    <td>{{ $subject->department }}</td>
                                    <td>{{ $subject->semester }}</td>
                                    <td>
                                        <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this subject?')">Delete</button>
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
