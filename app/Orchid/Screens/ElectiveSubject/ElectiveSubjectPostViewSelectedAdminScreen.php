<?php

namespace App\Orchid\Screens\ElectiveSubject;

use App\Models\ElectiveSubjectPost;
use App\Orchid\Layouts\ElectiveSubject\ElectiveSubjectPostViewSelectedAdminLayout;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;

class ElectiveSubjectPostViewSelectedAdminScreen extends Screen
{
    public $subjects;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(ElectiveSubjectPost $post): iterable
    {


        $subjects = DB::table('elective_subject_user_specialties as esus')
            ->join('elective_subjects as s', 'esus.elective_subject_id', '=', 's.id')
            ->select(
                's.name as subject_name',
                'esus.elective_subject_id',
                DB::raw('SUM(CASE WHEN esus.priority = 0 THEN 1 ELSE 0 END) as priority_0'),
                DB::raw('SUM(CASE WHEN esus.priority = 1 THEN 1 ELSE 0 END) as priority_1'),
                DB::raw('SUM(CASE WHEN esus.priority = 2 THEN 1 ELSE 0 END) as priority_2'),
                DB::raw('SUM(CASE WHEN esus.priority = 3 THEN 1 ELSE 0 END) as priority_3'),
                DB::raw('SUM(CASE WHEN esus.priority = 4 THEN 1 ELSE 0 END) as priority_4'),
                DB::raw('SUM(CASE WHEN esus.priority = 5 THEN 1 ELSE 0 END) as priority_5')
            )
            ->where('esus.elective_post_id', $post->id)
            ->groupBy('esus.elective_subject_id', 's.name')
            ->orderBy('s.name')
            ->get();
        return [
            'subjects' =>$subjects
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Статистика вибіркових предметів за пріоритетами';
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
             Layout::view('electiveSubject.subjectViewSelected')
        ];
    }
}
