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

        Blade::directive('get_gravatar_uri', function ($email) {
            return "http://www.gravatar.com/avatar/<?=md5($email)?>?size=1024&default=identicon";
        });

        Blade::directive('get_default_gravatar_uri', function () {
           return "http://www.gravatar.com/avatar/133713371337?size=1024&default=identicon";
        });

        Blade::directive('titleize', function ($str) {
            return "<?=\Stringy\Stringy::create($str)->titleize()?>";
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
