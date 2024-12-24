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
        $locale = app()->getLocale();
        View::composer(['home', 'components.nav.links'], function ($view) use ($locale, $categoryServices) {
            $categories = $categoryServices->getCategories($locale);
            $view->with('categories', $categories);
        });
    }
}
