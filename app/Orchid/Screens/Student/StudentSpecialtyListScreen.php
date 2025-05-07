<?php

namespace App\Orchid\Screens\Student;

use App\Models\UserSpecialty;
use App\Orchid\Layouts\Student\StudentSpecialtyListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Screen;

class StudentSpecialtyListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {


        return [
            'student_specialties' => UserSpecialty::all()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Спеціальності студентів';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [

        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            StudentSpecialtyListLayout::class
        ];
    }
}
