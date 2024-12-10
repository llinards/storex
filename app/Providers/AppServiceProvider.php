<?php

namespace App\Providers;

use App\Models\Category;
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
    public function boot(): void
    {
        view()->composer(['home', 'includes.navbar'], function ($view) {
            $categories = Category::with([
                'translation' => function ($query) {
                    $query->select('category_id', 'title', 'slug', 'description', 'locale')
                        ->where('locale', app()->getLocale());
                },
            ])
                ->select('id', 'image')
                ->whereHas('translation', function ($query) {
                    $query->where('locale', app()->getLocale());
                })
                ->get();
            $view->with('categories', $categories);
        });
    }
}
