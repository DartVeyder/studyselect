<?php

namespace App\Orchid\Screens\ElectiveSubject;

use App\Models\ElectiveSubject;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ElectiveSubjectEditScreen extends Screen
{
    public $electiveSubject;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query( ElectiveSubject $electiveSubject): iterable
    {
        return [
            'electiveSubject' =>$electiveSubject
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Створи дисципліну';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create')
                ->icon('pencil')
                ->method('createOrUpdate'),
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
            Layout::rows([
                Input::make('name')
                ->title('Назва')
            ])
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->electiveSubject->fill($request->all())->save();

        Toast::info('Ви успішно створили дисципліну.');

        return redirect()->route('platform.elective-subject');
    }
}
