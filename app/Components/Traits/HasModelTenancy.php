<?php

namespace App\Components\Traits;

use App\Components\Observers\ModelTenancyObserver;
use App\Components\Scopes\ModelTenancyScope;

trait HasModelTenancy
{
    /**
     * 
     * Add tenancy scope and observer to every model that uses this trait.
     * 
     * @return void
     */
    protected static function boot(): void
    {
        // boot default
        parent::boot();

        // add tenancy scope
        static::addGlobalScope(new ModelTenancyScope);

        // add tenancy observer
        static::observe(new ModelTenancyObserver);
    }
}
