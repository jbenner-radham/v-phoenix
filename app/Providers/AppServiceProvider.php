<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;
use Stringy\Stringy as S;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('format_tel', function ($tel) {
            return "<?=\Stringy\Stringy::create($tel)->replace('-', '.')?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
