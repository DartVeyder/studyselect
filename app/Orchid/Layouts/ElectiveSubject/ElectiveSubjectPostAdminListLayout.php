<?php

namespace App\Orchid\Layouts\ElectiveSubject;

use App\Models\ElectiveSubjectPost;
use App\Models\ElectiveSubjectPostUserSpecialty;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ElectiveSubjectPostAdminListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'electiveSubjectPosts';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title', 'Title')
                ->render(fn (ElectiveSubjectPost $post) =>   Link::make( $post->title)
                    ->route('platform.elective-subject-post.view-selected', $post) ),
            TD::make('active',__('Active')),
            TD::make('created_at',__('Date of publication')),
        ];
    }
}
