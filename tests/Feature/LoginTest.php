<?php

use App\Models\User;

it('returns a successful response for login page', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
});

it('returns to login page when trying to access dashboard', function () {
    $response = $this->get(route('admin.index'));

    $response->assertRedirect('/login');
});

it('returns a validation message if email and/or password is incorrect', function () {
    $response = $this->post('/login', [
        'email' => 'wrong@example.com',
        'password' => 'wrongpassword',
    ]);

    $response->assertSessionHasErrors(['email']);
});

it('returns redirect to admin dashboard if user has been authenticated', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('admin.index'));

    $response->assertStatus(200);
    $response->assertViewIs('admin.index');
});

it('logs out user successfully', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->post('/logout')
        ->assertRedirect('/');

    $this->assertGuest();
});

it('remembers user when remember me is checked', function () {
    $user = User::factory()->create();

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
        'remember' => true,
    ]);

    $response->assertRedirect(route('admin.index'));
    $this->assertAuthenticatedAs($user);
});
