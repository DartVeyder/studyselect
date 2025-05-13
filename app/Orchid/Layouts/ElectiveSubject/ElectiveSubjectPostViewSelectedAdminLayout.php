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

class ElectiveSubjectPostViewSelectedAdminLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'subjects';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('last_name', 'Last name')
        ];
    }
}
