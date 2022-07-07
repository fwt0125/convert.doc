<?php

namespace App\Domain\Convert\Providers;

use Illuminate\Support\ServiceProvider;

class ConvertServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            'App\Domain\Convert\Repositories\Contracts\DocListsRepository',
            'App\Domain\Convert\Repositories\Eloquent\DocListsRepositoryEloquent'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
