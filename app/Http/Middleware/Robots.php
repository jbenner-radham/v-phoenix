<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Spatie\RobotsMiddleware\RobotsMiddleware;

class Robots extends RobotsMiddleware
{
    /**
     * @param  Request $request
     * @return string|bool
     */
    protected function shouldIndex(Request $request)
    {
        return app()->environment('production');
    }
}
