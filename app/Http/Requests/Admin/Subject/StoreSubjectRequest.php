<?php

namespace App\Http\Requests\Admin\Subject;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubjectRequest extends FormRequest
{
   
    public function rules(): array
    {
        return [
            'subject_name' => ['required', 'string', 'max:255'],
            'teacher_id' => ['required'], 
            'year' => ['required', 'string'],
            'department' => ['required', 'string'],
            'semester' => ['required', 'string'],
        ];
    }
}
