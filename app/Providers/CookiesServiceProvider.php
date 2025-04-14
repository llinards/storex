<?php

namespace App\Providers;

use Whitecube\LaravelCookieConsent\CookiesServiceProvider as ServiceProvider;
use Whitecube\LaravelCookieConsent\Facades\Cookies;

class CookiesServiceProvider extends ServiceProvider
{
    /**
     * Define the cookies users should be aware of.
     */
    protected function registerCookies(): void
    {
        Cookies::essentials()
               ->session()
               ->csrf();

        Cookies::analytics()
               ->google(
                   id: "G-Z80E71HY3E",
               );
    }
}
