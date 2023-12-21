<?php

namespace App\Http\Requests\Admin\DailySchedule;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDailyScheduleRequest extends FormRequest
{
   
    public function rules(): array
    {
        return [
            'day_name' => ['string', 'max:255'],
            'daily_schedule_id' => ['exists:daily_schedule,id'],
            'teacher_id' => ['exists:teachers,id'],
            'location' => ['string', 'max:255'],
            'department' => ['string', 'max:255'],
            'start_time' => ['date_format:H:i'],
            'end_time' => ['date_format:H:i', 'after:start_time'],
        ];
    }
}
