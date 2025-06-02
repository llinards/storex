<?php

it('returns a successful response', fn() => $this->get('/lv')->assertStatus(200));

//it('redirects to the default locale', fn() => $this->get('/')->assertRedirect('/lv'));


it('returns a page with a pricelist', fn() => $this->get(route('pricelist'))->assertStatus(200));

it('returns a faq page', fn() => $this->get(route('faq'))->assertStatus(200));

it('returns a contact us page', fn() => $this->get(route('contacts'))->assertStatus(200));

it('returns an about us page', fn() => $this->get(route('about'))->assertStatus(200));

it('returns a privacy policy page', fn() => $this->get(route('privacy-policy'))->assertStatus(200));
