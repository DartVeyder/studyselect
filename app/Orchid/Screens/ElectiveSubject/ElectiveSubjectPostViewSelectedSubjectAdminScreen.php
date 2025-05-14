<?php

namespace App\Orchid\Screens\ElectiveSubject;

use App\Models\ElectiveSubject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class ElectiveSubjectPostViewSelectedSubjectAdminScreen extends Screen
{
    public $subjectName;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $subjectId = \Illuminate\Support\Facades\Request::route('subject');
        $postId = \Illuminate\Support\Facades\Request::route('post');

        $subject =  ElectiveSubject::find($subjectId);

        $studentsByPriority = DB::table('elective_subject_user_specialties as eup')
            ->join('user_specialties as us', 'eup.user_specialty_id', '=', 'us.id')
            ->join('users as u', 'us.user_id', '=', 'u.id')
            ->select(
                'eup.priority',
                'us.full_name',
                'us.specialty',
                'us.group',
                'us.id as user_specialty_id',
                'u.id as user_id'
            )
            ->where('eup.elective_post_id',  $postId)
            ->where('eup.elective_subject_id',  $subjectId)
            ->orderBy('eup.priority')
            ->orderBy('us.full_name')
            ->get()
            ->groupBy('priority');

        return [
            'studentsByPriority'=>$studentsByPriority,
            'subjectName'=>$subject->name,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Предмет:  ' . $this->subjectName;
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
            Layout::view('electiveSubject/subject-detail')
        ];
    }
}
