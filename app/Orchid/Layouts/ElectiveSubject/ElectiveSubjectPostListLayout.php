<?php

namespace App\Orchid\Layouts\ElectiveSubject;

use App\Models\ElectiveSubjectPostUserSpecialty;
use Illuminate\Support\Facades\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ElectiveSubjectPostListLayout extends Table
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
                ->render(function ($post) {
                    $id = Request::route('id');

                    $electivePost = ElectiveSubjectPostUserSpecialty::where(['user_specialty_id' => $id, 'elective_post_id' => $post->id])->get();
                    if($electivePost->isNotEmpty()){
                        return  $post->title .'<span class="m-0 ms-3 alert alert-success rounded p-2">Вибрано</span>';
                    }
                    return Link::make($post->title)
                    ->route('platform.specialty.elective-subject-posts.elective-subject', ['id' =>$id,'postId' => $post->id]);

            }),
            TD::make('active','Active'),
            TD::make('created_at','Date of publication'),
        ];
    }
}
