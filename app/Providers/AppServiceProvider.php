<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Register custom path for Livewire components
        Livewire::component('site-search', \App\Livewire\SiteSearch::class);
    }
}
