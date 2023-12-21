<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Subject\StoreSubjectRequest;
use App\Http\Requests\Admin\Subject\UpdateSubjectRequest;
use App\Models\Subject;
use App\Models\Teacher;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('Admin.Pages.Subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all();

        return view('Admin.Pages.Subject.add_subject', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        $subjects_data = $request->validated();

        $subjects =  Subject::create($subjects_data);
        return redirect()->route('subjects.index', compact('subjects'))->with('message', 'Subjects Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return view('Admin.Pages.Subject.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
{
    $teachers = Teacher::all(); // Fetch teachers
    return view('Admin.Pages.Subject.edit_subject', compact('subject', 'teachers'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $subject_data = $request->validated();

        $subject->update($subject_data);
        return redirect()->route('subjects.index')->with('message', 'Subject Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('subjects.index')->with('delete', 'subject deleted Successfully');;
    }
}
