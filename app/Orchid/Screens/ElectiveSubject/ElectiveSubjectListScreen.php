<?php

namespace App\Orchid\Screens\ElectiveSubject;

use App\Models\ElectiveSubject;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class ElectiveSubjectListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'elective_subjects' => ElectiveSubject::orderBy('name', 'asc')->get()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'ElectiveSubjectListScreen';
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
            Layout::view('electiveSubject/index')
        ];
    }
}
