<?php


namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

abstract class FilterAbstract
{
   abstract public function filter(Builder $builder, $value);

   public function mapping()
   {
       return [];
   }

   protected function resolveFilterValue($value)
   {
       return Arr::get($this->mapping(), $value);
   }

   protected function resolveOrederDirection($direction)
   {
        return Arr::get([
          'desc'=>'desc',
          'asc'=>'asc'
        ], $direction,'desc');
   }
}
