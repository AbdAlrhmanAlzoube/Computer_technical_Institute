<?php
namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{

    public function definition()
    {
        return [
            'subject_name' => $this->faker->word,
            'teacher_id' => Teacher::inRandomOrder()->first()->id,
            'year' => $this->faker->year, 
            'department' => $this->faker->randomElement(['Software Engineering', 'Network Engineering', 'Computer Engineering']),
            'semester' => $this->faker->randomElement(['Semester One', 'Semester Two']),
        ];
        
    }
}
