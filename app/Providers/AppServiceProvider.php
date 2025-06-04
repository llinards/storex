<?php

namespace App\Providers;

use App\Services\CategoryServices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Mcamara\LaravelLocalization\Traits\LoadsTranslatedCachedRoutes;

class AppServiceProvider extends ServiceProvider
{
    use LoadsTranslatedCachedRoutes;

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
        Model::unguard();
        Model::automaticallyEagerLoadRelationships();
        RouteServiceProvider::loadCachedRoutesUsing(fn() => $this->loadCachedRoutes());

        View::composer(['home', 'components.nav.links', 'includes.footer'],
            static function ($view) use ($categoryServices) {
                $categories = $categoryServices->getActiveCategories();
                $view->with('categories', $categories);
            });
    }
}
