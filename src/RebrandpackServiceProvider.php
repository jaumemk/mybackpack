<?php

namespace Jaumemk\Rebrandpack;

use Illuminate\Support\ServiceProvider;

class RebrandpackServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->register(\Jaumemk\Rebrandpack\OverrideBackpackServiceProvider::class);
        $this->app->register(\Backpack\Base\BaseServiceProvider::class);
        $this->app->register(\Backpack\CRUD\CrudServiceProvider::class);
    }

}
