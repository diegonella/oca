<?php 
namespace diegonella\OCA;

use Illuminate\Support\ServiceProvider;

class OcaEnviosServiceProvider extends ServiceProvider
{

    public function boot()
    {
        
    }

    
    public function register()
    {
        $this->app->make('diegonella\OCA\Oca');
    }

} 