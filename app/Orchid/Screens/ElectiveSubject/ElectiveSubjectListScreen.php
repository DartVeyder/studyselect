<?php

namespace App\Orchid\Screens\ElectiveSubject;

use App\Models\ElectiveSubject;
use App\Models\ElectiveSubjectPost;
use App\Models\ElectiveSubjectPostUserSpecialty;
use App\Models\ElectiveSubjectUserSpecialty;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use function Symfony\Component\String\s;

class ElectiveSubjectListScreen extends Screen
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

        $subjects = ElectiveSubject::orderBy('name', 'asc')->get();


        //dd($this->specialtyId);
        return [
            'subjects'    =>   $subjects ,
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
        $post = ElectiveSubjectPost::find($this->postId);
        if( $post){
            return $post->title;
        }
        return 'ElectiveSubjectListScreen';
    }

    public function description(): ?string
    {
        return '';
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
                ->method('create'),
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
                    ->value('')
                    ->options([
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                    ])
                    ->horizontal()
                    ->title( $n . '. '. $subject->name) ,
                Input::make("data[$key][elective_subject_id]")
                    ->value($subject->id)
                    ->hidden(),
                Input::make("data[$key][user_specialty_id]")
                    ->value( $this->specialtyId)
                    ->hidden(),
                Input::make("data[$key][elective_post_id]")
                    ->value( $this->postId)
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
    public function create(Request $request)
    {

        $data = $request->input('data');
        $result = ElectiveSubjectUserSpecialty::insert($data);

        if($result){
            ElectiveSubjectPostUserSpecialty::create(['user_specialty_id'=>$this->specialtyId , 'elective_post_id' => $this->postId]);
        }

        Toast::info('Ваші відповіді успішно записані.');

        return redirect()->route('platform.specialty', $this->specialtyId );
    }
}
