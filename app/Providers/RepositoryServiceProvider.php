<?php

namespace App\Providers;

use App\Interfaces\BaseRepositoryInterface;
use App\Repositories\ChatRepository;
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
        $this->app->bind(
            BaseRepositoryInterface::class,
            ChatRepository::class
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
