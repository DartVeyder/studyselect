<?php

namespace App\Orchid\Screens\User;

use App\Orchid\Layouts\Student\StudentSpecialtyListLayout;
use App\Orchid\Layouts\User\UserSpecialtyListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Screen;

class UserSpecialtyListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Request $request): iterable
    {
        $user = $request->user()->load('specialties');

        return [
            'specialties' => $user->specialties
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Оберіть спеціальність';
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
            UserSpecialtyListLayout::class
        ];
    }
}
