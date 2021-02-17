<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        Schema::defaultStringLength(191);
        //This is for registering the modules configurations
          $activeModules=config("modules.active");
            if(!$activeModules){
                $activeModules=[];
            }

            foreach($activeModules as $module){
                $directory = dirname(__FILE__)."/../Modules/".$module.'/Config';
                foreach (Finder::create()->in($directory)->name('*.php') as $file)
                 {
                     $this->mergeConfigFrom( $file->getRealPath() , basename($file->getRealPath(), '.php'));
                 }
            }



         

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
