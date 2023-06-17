<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;

test('pages screen can be rendered', function () {
    $response = $this->get('/pages');

    $response->assertStatus(200);
});

test('users can authenticate using the pages screen', function () {
    $user = User::factory()->create();

    $response = $this->post('/pages', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(RouteServiceProvider::HOME);
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    $this->post('/pages', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
});
