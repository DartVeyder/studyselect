<?php

namespace App\Orchid\Screens\Student;

use App\Services\GoogleSheet\StudentsSheet;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class StudentSheetListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(StudentsSheet $sheets): iterable
    {
        return [
            'students' => $sheets->readSheet()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Студенти з google таблиці';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::view('student/student-sheet-list')
        ];
    }
}
