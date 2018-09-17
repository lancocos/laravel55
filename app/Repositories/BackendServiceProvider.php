<?php
namespace App\Repositories;


use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('App\Repositories\RepositoryInterface', 'App\Repositories\UserRepositiry');
    }
}