<?php

namespace App\Orchid\Screens\ElectiveSubject;

use App\Models\ElectiveSubjectPostUserSpecialty;
use App\Models\ElectiveSubjectUserSpecialty;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ElectiveSubjectEditScreen extends Screen
{
    public $subjects;
    public $postId;
    public $specialtyId;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $postId = \Illuminate\Support\Facades\Request::route('postId');
        $specialtyId =\Illuminate\Support\Facades\Request::route('id');

        $subjects = ElectiveSubjectUserSpecialty::with('subject')->where(['user_specialty_id' => $specialtyId, 'elective_post_id' => $postId])->get();
        return [
            'subjects'    =>  $subjects ,
            'postId'      => $postId,
            'specialtyId' => $specialtyId,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Змінити пріоритети у вибіркових дисциплінах';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save')
                ->icon('save')
                ->method('save'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        $fields = [];
        $subjects = $this->subjects;
        $n = 1;
        foreach ($subjects as $key => $subject){
            $fields[] =  [
                Select::make("data[$key][priority]")
                    ->empty('-', 0)
                    ->value($subject->priority)
                    ->options([
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                    ])
                    ->horizontal()
                    ->title( $n . '. '. $subject->subject->name) ,
                Input::make("data[$key][id]")
                    ->value($subject->id )
                    ->hidden(),
            ];
            $n++;
        }
        $fields = array_merge(...$fields);
        return [
            Layout::rows(
                $fields
            )
        ];
    }


    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request)
    {

        $data = $request->input('data');

        foreach ($data as $item) {
            ElectiveSubjectUserSpecialty::where('id', $item['id'])
                ->update(['priority' => $item['priority']]);
        }

        Toast::info('Ваші відповіді успішно записані.');

        return redirect()->back();
    }
}
