<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DailySchedule>
 */
class DailyScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day_name' => $this->faker->dayOfWeek,
            'subject_id' => Subject::inRandomOrder()->first()->id,
            'teacher_id' => Teacher::inRandomOrder()->first()->id,
            'location' => $this->faker->address,
            'department' => $this->faker->randomElement(['Software Engineering', 'Network Engineering', 'Computer Engineering']),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
        ];
    }
}