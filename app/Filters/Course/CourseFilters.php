<?php


namespace App\Filters\Course;
use App\Filters\Course\Ordering\ViewsOrder;
use App\Filters\FiltersAbstract;

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

}
