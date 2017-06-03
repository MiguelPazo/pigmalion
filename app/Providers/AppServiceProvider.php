<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('changeStringServ', function () {
            return new \App\Services\ChangeStringService;
        });

        $this->app->singleton('clearParServ', function () {
            return new \App\Services\ClearParService;
        });

        $this->app->singleton('completeRangeServ', function () {
            return new \App\Services\CompleteRangeService;
        });
    }

    public function provides()
    {
        return [
            'App\Services\ChangeStringService',
            'App\Services\ClearParService',
            'App\Services\CompleteRangeService',
        ];
    }

}
