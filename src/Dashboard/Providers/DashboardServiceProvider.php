<?php

namespace Artesaos\Defender\Providers;

use Illuminate\Support\ServiceProvider;
use Artesaos\Defender\Repositories\Eloquent\EloquentUserRepository;

class DashboardServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $this->requireRoutesFile();
        $this->loadDashboardViews();
        $this->loadDashboardTranslations();
        $this->publishConfiguration();
    }

    public function register()
    {
        $this->registerBindings();

        if ( ! isset($this->app['flash']))
        {
            $this->app->register('Laracasts\Flash\FlashServiceProvider');
        }
    }

    public function provides()
    {
        return ['defender.user'];
    }

    protected function registerBindings()
    {
        $userClass = $this->app['config']->get('auth.model');

        $this->app->singleton('defender.user', function($app) use ($userClass) {
            return new EloquentUserRepository($app, $app->make($userClass));
        });

        $this->app->singleton('Artesaos\Defender\Contracts\UserRepository', function($app) {
            return $app['defender.user'];
        });
    }

    /**
     * Require routes file.
     */
    protected function requireRoutesFile()
    {
        require __DIR__.'/../../resources/routes.php';
    }

    /**
     * Publish dashboard configuration.
     */
    protected function publishConfiguration()
    {
    }

    /**
     * Load dashboard views.
     */
    protected function loadDashboardViews()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views/artesaos', 'artesaos');
    }

    protected function loadDashboardTranslations()
    {
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang/artesaos', 'artesaos');
    }
}

