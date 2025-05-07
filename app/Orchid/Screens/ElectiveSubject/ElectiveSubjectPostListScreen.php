<?php

namespace App\Orchid\Screens\ElectiveSubject;

use App\Models\ElectiveSubjectPost;
use App\Models\ElectiveSubjectPostUserSpecialty;
use App\Orchid\Layouts\ElectiveSubject\ElectiveSubjectPostListLayout;
use Orchid\Screen\Screen;

class ElectiveSubjectPostListScreen extends Screen
{
    public $electiveSubjectPosts;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {

        return [
            'electiveSubjectPosts' => ElectiveSubjectPost::all()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'ElectiveSubjectPostListScreen';
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
            ElectiveSubjectPostListLayout::class
        ];
    }
}
