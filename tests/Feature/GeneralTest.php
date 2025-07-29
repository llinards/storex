<?php

it('returns a successful response', fn () => $this->get('/lv')->assertStatus(200));

// it('redirects to the default locale', fn() => $this->get('/')->assertRedirect('/lv'));

it('returns a page with a pricelist', fn () => $this->get(route('pricelist'))->assertStatus(200));

it('returns a faq page', fn () => $this->get(route('faq'))->assertStatus(200));

it('returns a contact us page', fn () => $this->get(route('contacts'))->assertStatus(200));

it('returns an about us page', fn () => $this->get(route('about'))->assertStatus(200));

it('returns a privacy policy page', fn () => $this->get(route('privacy-policy'))->assertStatus(200));

it('return english locale using en prefix', function () {
    $this->refreshApplicationWithLocale('en');
    $response = $this->get('/en');
    $response->assertOk();
    expect(app()->getLocale())->toBe('en');
});

it('returns 404 for invalid locale', function () {
    $response = $this->get('/invalid-locale');
    $response->assertStatus(404);
});

it('returns appropriate content type headers', function () {
    $response = $this->get(route('about'));

    $response->assertStatus(200)
        ->assertHeader('Content-Type', 'text/html; charset=UTF-8');
});

it('loads without errors on different screen sizes', function () {
    $response = $this->get('/lv');

    $response->assertStatus(200)
        ->assertSee('<meta name="viewport"', false);
});
