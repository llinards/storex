<?php

namespace App\Providers;

use App\Services\CategoryServices;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(CategoryServices $categoryServices): void
    {
        View::composer(['home', 'components.nav.links', 'category'], function ($view) use ($categoryServices) {
            $categories = $categoryServices->getCategories();
            $view->with('categories', $categories);
        });
    }
}
