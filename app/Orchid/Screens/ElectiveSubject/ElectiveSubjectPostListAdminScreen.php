<?php

namespace App\Orchid\Screens\ElectiveSubject;

use App\Models\ElectiveSubjectPost;
use App\Orchid\Layouts\ElectiveSubject\ElectiveSubjectPostAdminListLayout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ElectiveSubjectPostListAdminScreen extends Screen
{
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
        return 'Список записів про вибір вибіркових дисуиплін';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create')
                ->icon('pencil')
                ->route('platform.elective-subject-post.create'),
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
            ElectiveSubjectPostAdminListLayout::class
        ];
    }
}
