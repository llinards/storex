<?php

it('returns a successful response', function () {
    $response = $this->get('/lv');

    $response->assertStatus(200);
});

it('redirects to the default locale', function () {
    $response = $this->get('/');

    $response->assertRedirect('/lv');
});

it('returns correct locale when changing the locale (from lv to en)', function () {
    $response = $this->get('/lv?changeLanguage=en');

    $response->assertStatus(200);
    expect(app()->getLocale())->toBe('en');
});

it('returns correct locale when changing the locale (from en to lv)', function () {
    $response = $this->get('/en?changeLanguage=lv');

    $response->assertStatus(200);
    expect(app()->getLocale())->toBe('lv');
});
