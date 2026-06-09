<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_home_page_is_available(): void
    {
        $response = $this->get('/');

        $response->assertOk();
    }

    public function test_parent_credentials_redirect_to_parent_dashboard(): void
    {
        $response = $this->post(route('login.submit'), [
            'role' => 'parent',
            'identifier' => 'orangtua',
            'password' => 'password',
        ]);

        $response->assertRedirect('/dashboard');
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

    public function test_register_page_is_available(): void
    {
        $this->get(route('register'))
            ->assertOk()
            ->assertSee('Daftar Akun Baru');
    }

    public function test_valid_registration_redirects_to_login_with_success_message(): void
    {
        $response = $this->post(route('register.submit'), [
            'name' => 'Ahmad Fauzi',
            'email' => 'ahmad@example.com',
            'phone' => '081234567890',
            'password' => 'password',
            'password_confirmation' => 'password',
            'relationship' => 'ayah',
            'terms' => '1',
        ]);

        $response
            ->assertRedirect(route('login'))
            ->assertSessionHas('success');
    }

    public function test_registration_validation_errors_are_returned_inline(): void
    {
        $response = $this->from(route('register'))->post(route('register.submit'), [
            'name' => '',
            'email' => 'bukan-email',
            'phone' => '',
            'password' => 'pendek',
            'password_confirmation' => 'berbeda',
            'relationship' => '',
        ]);

        $response
            ->assertRedirect(route('register'))
            ->assertSessionHasErrors([
                'name',
                'email',
                'phone',
                'password',
                'relationship',
                'terms',
            ]);
    }
}
