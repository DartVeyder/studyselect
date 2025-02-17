<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentElectiveSubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('department_elective_subjects')->insert([
            ['elective_subject_id' => 1, 'department_id' => 1, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 2, 'department_id' => 1, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 3, 'department_id' => 1, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 4, 'department_id' => 1, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 5, 'department_id' => 2, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 6, 'department_id' => 2, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 7, 'department_id' => 2, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 8, 'department_id' => 3, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 9, 'department_id' => 3, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 10, 'department_id' => 3, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 11, 'department_id' => 3, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 12, 'department_id' => 3, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 13, 'department_id' => 3, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 14, 'department_id' => 3, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 15, 'department_id' => 3, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 16, 'department_id' => 4, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 17, 'department_id' => 4, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 18, 'department_id' => 4, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 19, 'department_id' => 4, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 20, 'department_id' => 4, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 21, 'department_id' => 4, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 22, 'department_id' => 4, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 23, 'department_id' => 4, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 24, 'department_id' => 4, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 25, 'department_id' => 4, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 26, 'department_id' => 5, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 27, 'department_id' => 5, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 28, 'department_id' => 5, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 29, 'department_id' => 5, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 30, 'department_id' => 5, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 31, 'department_id' => 5, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 32, 'department_id' => 6, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 33, 'department_id' => 6, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 34, 'department_id' => 6, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 35, 'department_id' => 6, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 36, 'department_id' => 6, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 37, 'department_id' => 6, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 38, 'department_id' => 6, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 39, 'department_id' => 6, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 40, 'department_id' => 6, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 41, 'department_id' => 7, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 42, 'department_id' => 7, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 43, 'department_id' => 7, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 44, 'department_id' => 8, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 45, 'department_id' => 8, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 46, 'department_id' => 8, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 47, 'department_id' => 8, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 48, 'department_id' => 9, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 49, 'department_id' => 9, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 50, 'department_id' => 9, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 51, 'department_id' => 9, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 52, 'department_id' => 9, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 53, 'department_id' => 10, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 54, 'department_id' => 10, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 55, 'department_id' => 10, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 56, 'department_id' => 10, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 57, 'department_id' => 10, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 58, 'department_id' => 11, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 59, 'department_id' => 11, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 60, 'department_id' => 12, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 61, 'department_id' => 12, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 62, 'department_id' => 13, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 63, 'department_id' => 13, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 64, 'department_id' => 14, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 65, 'department_id' => 14, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 66, 'department_id' => 14, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 67, 'department_id' => 14, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 68, 'department_id' => 15, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 69, 'department_id' => 15, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 70, 'department_id' => 15, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 71, 'department_id' => 15, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 72, 'department_id' => 15, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 73, 'department_id' => 15, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['elective_subject_id' => 74, 'department_id' => 15, 'education_level_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
