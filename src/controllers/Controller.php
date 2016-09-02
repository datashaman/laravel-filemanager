<?php namespace Tsawler\Laravelfilemanager\controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    /**
     * Get the config for a given key, allowing users to override
     * the config generation via the IoC container.
     */
    protected function getConfig($key)
    {
        $config = App::make('laravel-filemanager.config');
        return $config[$key];
    }
}
