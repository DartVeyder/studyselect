<?php

namespace App\Orchid\Screens\ElectiveSubject;

use App\Models\ElectiveSubjectPost;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ElectiveSubjectPostEditScreen extends Screen
{
    public $electiveSubjectPost;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(ElectiveSubjectPost $electiveSubjectPost): iterable
    {
        return [
            'electiveSubjectPost' => $electiveSubjectPost
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->electiveSubjectPost->exists ? 'Редагувати запис для вибору вибіркових дисциплін' : 'Створити запис для вибору вибіркових дисциплін';
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
            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->electiveSubjectPost->exists),

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
                Input::make('electiveSubjectPost.title')
                    ->title('Title')
                    ->required(),
                TextArea::make('electiveSubjectPost.description')
                    ->title('Description'),


            ])
        ];
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->electiveSubjectPost->fill($request->get('electiveSubjectPost'))->save();

        Toast::info('Ви успішно створили публікацію.');

        return redirect()->back();
    }

}
