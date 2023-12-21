<?php

namespace App\Http\Requests\Admin\Subject;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubjectRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            'subject_name' => ['string', 'max:255'],
            'teacher_id' => ['string'],
            'year' => ['string'],
            'department' => ['string'],
            'semester' => ['string'],
        ];
    }
}
