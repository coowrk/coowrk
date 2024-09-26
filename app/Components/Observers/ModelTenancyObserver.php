<?php

namespace App\Components\Observers;

use Illuminate\Database\Eloquent\Model;

class ModelTenancyObserver
{
    /**
     * Handle the Customer "created" event.
     * 
     * @return void
     */
    public function created(Model $model): void
    {
        // save team_id on creation
        $model->team()
            ->associate(filament()->getTenant()->id)
            ->save();
    }
}
