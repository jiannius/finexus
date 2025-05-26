<?php

namespace Jiannius\Finexus;

use Illuminate\Support\ServiceProvider;

class FinexusServiceProvider extends ServiceProvider
{
    public function register() : void
    {
        //
    }

    public function boot() : void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}