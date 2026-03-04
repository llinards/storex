<?php

namespace App\Providers;

use Whitecube\LaravelCookieConsent\Consent;
use Whitecube\LaravelCookieConsent\Cookie;
use Whitecube\LaravelCookieConsent\CookiesGroup;
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
            ->group(function (CookiesGroup $group) {
                $group->name('gtm')
                    ->cookie(fn (Cookie $cookie) => $cookie->name('_ga')
                        ->duration(2 * 365 * 24 * 60)
                        ->description(__('cookieConsent::cookies.defaults._ga'))
                    )
                    ->cookie(fn (Cookie $cookie) => $cookie->name('_ga_WN778BD6')
                        ->duration(2 * 365 * 24 * 60)
                        ->description(__('cookieConsent::cookies.defaults._ga_ID'))
                    )
                    ->cookie(fn (Cookie $cookie) => $cookie->name('_gid')
                        ->duration(24 * 60)
                        ->description(__('cookieConsent::cookies.defaults._gid'))
                    )
                    ->cookie(fn (Cookie $cookie) => $cookie->name('_gat')
                        ->duration(1)
                        ->description(__('cookieConsent::cookies.defaults._gat'))
                    )
                    ->accepted(fn (Consent $consent) => $consent
                        ->script('<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=\'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);})(window,document,\'script\',\'dataLayer\',\'GTM-WN778BD6\');</script>')
                    );
            });
    }
}
