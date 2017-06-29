<?php

namespace Jaumemk\Rebrandpack;

use Illuminate\Support\ServiceProvider;

class OverrideBackpackServiceProvider extends ServiceProvider
{
    protected $resources = __DIR__ . '/resources/';

    public function boot()
    {
        $this->loadViewsFrom($this->resources . 'views', 'rebrandpack');
        $this->mergeConfigFrom(
            __DIR__ . '/config/rebrandpack/base.php', 'backpack.base'
        );
    }

    public function register()
    {
        //
    }

}
