<?php


namespace App\Filters\Course;

use App\Filters\Course\Ordering\ViewsOrder;
use App\Filters\FiltersAbstract;
use App\Subject;

class CourseFilters extends FiltersAbstract
{
    protected $filters = [
       'access' => AccessFilter::class,
       'started' => StartedFilter::class,
       'difficulty' => DifficultyFilter::class,
       'type' => TypeFilter::class,
       'subject' => SubjectFilter::class,
       'views' => ViewsOrder::class,
    ];

    public static function mappings()
    {
        $map = [
           'access' => [
              'free' => 'Free',
              'premium' => 'Premium'
           ],
           'difficulty' => [
              'beginner' => 'Beginner',
              'intermediate' => 'Intermediate',
              'advanced' => 'Advanced'
           ],
           'type' => [
              'theory' => 'Theory',
              'project' => 'Project',
              'snippet' => 'Snippet'
           ],
           'subject' => Subject::get()->pluck('name', 'slug')
        ];

        if(auth()->check()){
            $map = array_merge($map, ['started' => [
               'true' => 'Started',
               'false' => 'Not started'
            ]]);
        }

        return $map;
    }

}
