@if(session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<form class="forms-sample" action="{{ route('dailySchedules.update', $dailySchedule->id) }}" method="POST">
@csrf
@method('PUT') {{-- Use PUT method for update --}}
<div class="mb-3">
    <label for="day_name" class="form-label">Day Name</label>
    <input type="text" name="day_name" class="form-control" placeholder="Enter Day Name" value="{{ $dailySchedule->day_name }}">
</div>
<div class="mb-3">
    <label for="subject_id" class="form-label">Subject</label>
    <select name="subject_id" class="form-control">
        <option value="" disabled>Select Subject</option>
        @foreach ($subjects as $subject)
            <option value="{{ $subject->id }}" {{ $dailySchedule->subject_id == $subject->id ? 'selected' : '' }}>
                {{ $subject->subject_name }}
            </option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="teacher_id" class="form-label">Teacher</label>
    <select name="teacher_id" class="form-control">
        <option value="" disabled>Select Teacher</option>
        @foreach ($teachers as $teacher)
            <option value="{{ $teacher->id }}" {{ $dailySchedule->teacher_id == $teacher->id ? 'selected' : '' }}>
                {{ $teacher->teacher_name }}
            </option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="location" class="form-label">Location</label>
    <input type="text" name="location" class="form-control" placeholder="Enter Location" value="{{ $dailySchedule->location }}">
</div>
<div class="mb-3">
    <label for="department" class="form-label">Department</label>
    <input type="text" name="department" class="form-control" placeholder="Enter Department" value="{{ $dailySchedule->department }}">
</div>
<div class="mb-3">
    <label for="start_time" class="form-label">Start Time</label>
    <input type="text" name="start_time" class="form-control" placeholder="Enter Start Time" value="{{ $dailySchedule->start_time }}">
</div>
<div class="mb-3">
    <label for="end_time" class="form-label">End Time</label>
    <input type="text" name="end_time" class="form-control" placeholder="Enter End Time" value="{{ $dailySchedule->end_time }}">
</div>

<button type="submit" class="btn btn-primary me-2">Update</button>
</form>

</div>
</div>
</div>
</div> <!-- row -->

</div>
@endsection
