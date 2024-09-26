<?php

namespace App\Components\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ModelTenancyScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     * 
     * @return void
     */
    public function apply(Builder $builder, Model $model): void
    {
        $builder->where('team_id', filament()->getTenant()->id);
    }
}
