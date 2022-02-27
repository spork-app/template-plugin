<?php

namespace __NAMESPACE__;

use App\Spork;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class SporkServiceProvider extends RouteServiceProvider
{
    public function boot()
    {
      //
    }
    
    public function register()
    {
        Spork::addFeature('__FEATURE_NAME__', 'ViewBoardsIcon', '/__FEATURE_NAME_SLUG__');
      
        if (config('spork.__FEATURE_NAME__.enabled')) {
            Route::middleware($this->app->make('config')->get('spork.__FEATURE_NAME_SLUG__.middleware', ['auth:sanctum']))
                ->prefix('api/__FEATURE_NAME_SLUG__')
                ->group(__DIR__ . '/../routes/web.php');
        }
    }
}
