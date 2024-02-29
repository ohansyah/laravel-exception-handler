<?php

namespace Ohansyah\ExceptionHandler;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ExceptionHandlerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::group([
            'prefix' => 'exception-handler',
            'as' => 'exception-handler.',
            'namespace' => 'Ohansyah\ExceptionHandler\Http\Controllers',
        ], function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        });

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'EH');
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\Commands\PublishCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
