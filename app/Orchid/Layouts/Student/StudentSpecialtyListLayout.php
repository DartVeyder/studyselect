<?php

namespace App\Orchid\Layouts\Student;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class StudentSpecialtyListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'student_specialties';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('full_name', 'Здобувач')
                ->render(function ($student_specialties) {
                return Link::make($student_specialties->full_name)
                    ->route('platform.elective-subject', $student_specialties->id);
            }),
            TD::make('specialty', 'Спеціальність'),
            TD::make('group', 'Група'),
            TD::make('course', 'Курс'),
            TD::make('degree', 'Ступінь вищої освіти'),
            TD::make('education_program', 'Освітня програма'),
            TD::make('education_form', 'Форма здобуття освіти'),
            TD::make('funding', 'Фінансування'),
        ];
    }
}
