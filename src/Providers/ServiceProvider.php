<?php namespace Cvsouth\Amazon\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__.'/../Config/cvsouth-amazon.php' => config_path('cvsouth-amazon.php')], 'config');
    }

    public function register()
    {
    }
}
