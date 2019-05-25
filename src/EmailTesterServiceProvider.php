<?php
namespace crocodicstudio\emailtester;

use Illuminate\Support\ServiceProvider;

class EmailTesterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Views', 'emailtester');

        require __DIR__.'/Routes/route.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require __DIR__.'/Helpers/Helper.php';


        $this->app->singleton('emailtester', function () {
            return true;
        });
    }

}
