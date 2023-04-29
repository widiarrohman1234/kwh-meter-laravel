<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;

class AdminloginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAdminLogin()
    {
        $emailAdmin = 'admin@kwhmeter.com';
        $passwordAdmin = '12341234';
        $login = Auth::attempt(['email' => $emailAdmin, 'password' => $passwordAdmin]);
        dd($login);
        if ($login) {
            $response = $this->get('admin/home');
            $response->assertStatus(200);
        }
    }
}
