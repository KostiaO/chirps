<?php

namespace App\Providers;

use App\Services\AvatarManager;

use Illuminate\Contracts\Foundation\Application;

use Illuminate\Support\ServiceProvider;

class AvatarUploadServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AvatarManager::class, function (Application $app) {
            return new AvatarManager();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
