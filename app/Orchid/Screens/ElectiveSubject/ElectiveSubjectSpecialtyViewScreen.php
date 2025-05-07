<?php

namespace App\Orchid\Screens\ElectiveSubject;

use App\Models\ElectiveSubjectUserSpecialty;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class ElectiveSubjectSpecialtyViewScreen extends Screen
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
        return 'Перегляд пріоритетів у вибіркових дисциплінах';
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
        $fields = [];
        $subjects = $this->subjects;
        $n = 1;
        foreach ($subjects as $key => $subject){
            $fields[] =  [
                Input::make("data[$key][priority]")
                    ->value(($subject->priority == 0) ?  '-' : $subject->priority)
                    ->horizontal()
                    ->readonly()
                    ->title( $n . '. '. $subject->subject->name)
                    ,

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

}
