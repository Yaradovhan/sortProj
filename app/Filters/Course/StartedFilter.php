<?php


namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class StartedFilter extends FilterAbstract
{

    public function mapping()
    {
        return [
            'true' => true,
            'false' => false
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if ($value === null || !auth()->user())
            return $builder;
        $method = $value ? 'whereHas' : 'whereDoesntHave';

        return $builder->{$method}('users', function (Builder $builder) {
            $builder->whereIn('user_id', [auth()->id()]);
        });
    }
}
