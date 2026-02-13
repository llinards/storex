<?php

it('returns a successful response for home page', fn () => $this->get('/lv')->assertSuccessful());

it('returns pricelist page', fn () => $this->get(route('pricelist'))->assertSuccessful());

it('returns faq page', fn () => $this->get(route('faq'))->assertSuccessful());

it('returns contact us page', fn () => $this->get(route('contacts'))->assertSuccessful());

it('returns about us page', fn () => $this->get(route('about'))->assertSuccessful());

it('returns privacy policy page', fn () => $this->get(route('privacy-policy'))->assertSuccessful());

it('uses english locale with en prefix', function () {
    $this->refreshApplicationWithLocale('en');

    $this->get('/en')
        ->assertOk();

    expect(app()->getLocale())->toBe('en');
});

it('returns 404 for invalid locale', function () {
    $this->get('/invalid-locale')->assertNotFound();
});

it('returns correct content type header', function () {
    $this->get(route('about'))
        ->assertSuccessful()
        ->assertHeader('Content-Type', 'text/html; charset=utf-8');
});

it('includes viewport meta tag for responsive design', function () {
    $this->get('/lv')
        ->assertSuccessful()
        ->assertSee('<meta name="viewport"', false);
});
