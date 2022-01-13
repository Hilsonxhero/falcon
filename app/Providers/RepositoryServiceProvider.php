<?php

namespace App\Providers;

use App\Repository\category\CategoryRepo;
use App\Repository\category\CategoryRepoInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       $this->app->bind(CategoryRepoInterface::class,CategoryRepo::class);
    }
}
