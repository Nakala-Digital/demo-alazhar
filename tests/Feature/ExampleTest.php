<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_redirects_to_login(): void
    {
        $response = $this->get('/');

        $response->assertRedirect(route('login'));
    }

    public function test_parent_credentials_redirect_to_parent_dashboard(): void
    {
        $response = $this->post(route('login.submit'), [
            'role' => 'parent',
            'identifier' => 'orangtua',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('dashboard.index'));
    }

    public function test_admin_credentials_redirect_to_admin_dashboard(): void
    {
        $response = $this->post(route('login.submit'), [
            'role' => 'admin',
            'identifier' => 'admin',
            'password' => 'admin',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
    }

    public function test_invalid_credentials_return_a_login_error(): void
    {
        $response = $this->from(route('login'))->post(route('login.submit'), [
            'role' => 'parent',
            'identifier' => 'salah',
            'password' => 'salah',
        ]);

        $response
            ->assertRedirect(route('login'))
            ->assertSessionHasErrors('login');
    }
}
