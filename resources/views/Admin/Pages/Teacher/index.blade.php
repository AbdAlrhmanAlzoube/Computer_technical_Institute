@extends('admin.admin_dashboard')

@section('content')

@if(session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

@if(session('delete'))
<div class="alert alert-denger">
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
                        <h6 class="card-title">Teacher List</h6>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Teacher Number</th>
                                    <th>Teacher Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Contract Type</th>
                                    <th>Image</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td>{{ $teacher->teacher_number }}</td>
                                        <td>{{ $teacher->teacher_name }}</td>
                                        <td>{{ $teacher->phone }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->subject }}</td>
                                        <td>{{ $teacher->contract_type }}</td>
                                        <td>
                                            @if ($teacher->image)
                                                <img src="{{ asset('path/to/your/images/' . $teacher->image) }}" alt="Teacher Image" width="50">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-info btn-sm">Edit</a>
                                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
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
