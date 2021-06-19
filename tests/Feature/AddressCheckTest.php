<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use MyApp\Models\User;

class AddressCheckTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAccess()
    {
        $response = $this->get('/');
        $response->assertStatus(302);

        $user = User::factory()->create();
        $cookie = [
            'TKCHTID' => $user->loginid,
            'TKCHTPW' => $user->loginpw
        ];
        $response = $this->withCookies($cookie)->get('/');
        $response->assertStatus(200);

        $response = $this->get('/login');        
        $response->assertStatus(200);

        // アクセスを確認するだけのため、簡単なパタンのみ
        $request = [
            'email' => 'abc@gmail.com',
            'password' => '123456',
        ];

        $response = $this->post('/login/action', $request);  
        $response->assertStatus(200);
    }
}
