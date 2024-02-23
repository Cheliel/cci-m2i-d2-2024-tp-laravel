<?php

namespace App\Providers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Console\DumpCommand;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $var = (new Controller())->test();
        // var_dump($var);
        // $var = new RouteServiceProvider();
        // $var->get('/');
        // dd('test this');
    }
}
