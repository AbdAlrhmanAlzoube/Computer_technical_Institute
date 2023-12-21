<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailySchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_name',
        'subject_id', 
        'teacher_id', 
        'location',
        'department',
        'start_time',
        'end_time',
    ];

    // Assuming you have relationships defined in the model
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
