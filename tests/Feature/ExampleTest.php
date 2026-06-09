<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_root_redirects_to_login_for_guest(): void
    {
        $response = $this->get('/');
        $response->assertRedirect('/login');
    }

    public function test_login_page_is_available(): void
    {
        $response = $this->get('/login');
        $response->assertOk();
    }

    public function test_parent_login_with_valid_credentials(): void
    {
        $response = $this->post(route('login.submit'), [
            'role' => 'parent',
            'identifier' => 'orangtua',
            'password' => 'password',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertEquals('parent', session('ppdb_role'));
        $this->assertTrue(session('ppdb_auth'));
    }

    public function test_admin_login_with_valid_credentials(): void
    {
        $response = $this->post(route('login.submit'), [
            'role' => 'admin',
            'identifier' => 'admin',
            'password' => 'admin',
        ]);

        $response->assertRedirect('/admin/dashboard');
        $this->assertEquals('admin', session('ppdb_role'));
        $this->assertTrue(session('ppdb_auth'));
    }

    public function test_invalid_credentials_fail_and_return_to_login(): void
    {
        $response = $this->from('/login')->post(route('login.submit'), [
            'role' => 'parent',
            'identifier' => 'salah',
            'password' => 'salah',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('login');
    }

    public function test_parent_cannot_access_admin_dashboard(): void
    {
        $this->withSession(['ppdb_auth' => true, 'ppdb_role' => 'parent']);

        $response = $this->get('/admin/dashboard');
        $response->assertRedirect('/dashboard');
    }

    public function test_admin_cannot_access_parent_dashboard(): void
    {
        $this->withSession(['ppdb_auth' => true, 'ppdb_role' => 'admin']);

        $response = $this->get('/dashboard');
        $response->assertRedirect('/admin/dashboard');
    }

    public function test_guest_cannot_access_parent_dashboard(): void
    {
        $response = $this->get('/dashboard');
        $response->assertRedirect('/login');
    }

    public function test_guest_cannot_access_admin_dashboard(): void
    {
        $response = $this->get('/admin/dashboard');
        $response->assertRedirect('/login');
    }

    public function test_logout_clears_session_and_redirects_to_login(): void
    {
        $this->withSession(['ppdb_auth' => true, 'ppdb_role' => 'parent', 'ppdb_user' => ['name' => 'Test']]);

        $response = $this->get('/keluar');

        $response->assertRedirect('/login');
        $response->assertSessionHas('success', 'Anda berhasil keluar.');

        $this->assertNull(session('ppdb_auth'));
        $this->assertNull(session('ppdb_role'));
        $this->assertNull(session('ppdb_user'));
    }

    public function test_logged_in_parent_cannot_access_login_page(): void
    {
        $this->withSession(['ppdb_auth' => true, 'ppdb_role' => 'parent']);

        $response = $this->get('/login');
        $response->assertRedirect('/dashboard');
    }

    public function test_logged_in_admin_cannot_access_login_page(): void
    {
        $this->withSession(['ppdb_auth' => true, 'ppdb_role' => 'admin']);

        $response = $this->get('/login');
        $response->assertRedirect('/admin/dashboard');
    }
}
