<?php

namespace App;

use App\Filters\Course\CourseFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed difficulty
 */
class Course extends Model
{
    public $appends = [
        'started',
        'formattedAccess',
        'formattedDifficulty',
        'formattedType',
        'formattedStarted'
    ];

    public function getFormattedDifficultyAttribute()
    {
        return ucfirst($this->difficulty);
    }

    public function getFormattedTypeAttribute()
    {
        return ucfirst($this->type);
    }

    public function getFormattedAccessAttribute()
    {
        return $this->free===1 ? 'Free' : 'Premium';
    }

    public function getFormattedStartedAttribute()
    {
        return $this->started===true?'Started by: '.auth()->user()->name:'Not started';
    }

    public function scopeFilter(Builder $builder, $request, array $filters = [])
    {
        return (new CourseFilters($request))->add($filters)->filter($builder);
    }

    public function subjects()
    {
        return $this->morphToMany(Subject::class, 'subjectable');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getStartedAttribute()
    {
        if(!auth()->check())
            return false;

        return $this->users->contains(auth()->user());
    }
}
