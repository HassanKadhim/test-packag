<?php

namespace H3\Commend;

use Illuminate\Support\ServiceProvider;
use Commend\Console\Commands\Reset;
class CommendServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'commend');

        

        if ($this->app->runningInConsole()) {
            $this->commands([
                Reset::class,
            ]);
        }
    }
}
