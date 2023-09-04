<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\ICustomerMessage;
use App\Repositories\CustomerMessagesRepository;

use App\Interfaces\ISections;
use App\Repositories\SectionsRepository;

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
        $this->app->bind(ICustomerMessage::class, CustomerMessagesRepository::class);
        $this->app->bind(ISections::class, SectionsRepository::class);
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
