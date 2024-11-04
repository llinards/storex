<?php

it('returns a successful response', function () {
  $response = $this->get('/lv');

  $response->assertStatus(200);
});

it('redirects to the default locale', function () {
  $response = $this->get('/');

  $response->assertRedirect('/lv');
});
