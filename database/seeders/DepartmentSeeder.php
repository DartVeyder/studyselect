<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $departments = [
            'Біології та хімії',
            'Медико-біологічних дисциплін, географії та екології',
            'Фізики та інформаційних систем',
            'Філософії, соціології та політології імені професора Валерія Скотного',
            'Всесвітньої історії та спеціальних історичних дисциплін',
            'Історії України та правознавства',
            'Математики та економіки',
            'Української літератури та теорії літератури',
            'Зарубіжної літератури та полоністики',
            'Української мови',
            'Соціальної педагогіки та корекційної освіти',
            'Технологічної та професійної освіти',
            'Німецької та французької мов і методики їх навчання',
            'Практики англійської мови і методики її навчання',
            'Загальної педагогіки та дошкільної освіти',
            'Психології',
        ];

        // Додавання кафедр в таблицю departments
        foreach ($departments as $department) {
            Department::create([
                'name' => $department,
            ]);
        }
    }
}
