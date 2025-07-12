<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'The Art of Lightsabers I',
                'force_reward' => '50',
                'role_id' => 1
            ],
            [
                'title' => 'The Art of Lightsabers II',
                'force_reward' => '75',
                'role_id' => 1
            ],
            [
                'title' => 'The Art of Lightsabers III',
                'force_reward' => '100',
                'role_id' => 1
            ],
            [
                'title' => 'How to Beat Obi Wan Kenobi',
                'force_reward' => '100',
                'role_id' => 2
            ],
            [
                'title' => 'How to be like Darth Vader',
                'force_reward' => '50',
                'role_id' => 2
            ],
            [
                'title' => 'What is Order 66?',
                'force_reward' => '66',
                'role_id' => 2
            ],
            [
                'title' => 'Who is Anakin Skywalker?',
                'force_reward' => '55',
                'role_id' => 1
            ],
            [
                'title' => 'The Truth about Palpatine',
                'force_reward' => '80',
                'role_id' => 2
            ],
        ];

        Course::insert($data);
    }
}
