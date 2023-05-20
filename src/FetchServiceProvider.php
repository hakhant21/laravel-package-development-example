<?php

namespace Hak\DataFetcher;

use Illuminate\Support\ServiceProvider;

class FetchServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
    }

    public function register()
    {
        $this->app->singleton('Fetch', function(){
            return new Fetch();
        });
    }
}