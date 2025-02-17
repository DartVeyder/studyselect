<?php

namespace Database\Seeders;

use App\Models\EducationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $educationLevels = [
            'Бакалавр',
            'Магістр',
        ];

        // Додавання кафедр в таблицю departments
        foreach ($educationLevels as $educationLevel) {
            EducationLevel::create([
                'name' => $educationLevel,
            ]);
        }
    }
}
