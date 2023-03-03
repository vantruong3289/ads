<?php

namespace Tests;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Consumer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ConsumerTest extends TestCase
{
    use WithFaker;

    public function testStore()
    {
        $data = Consumer::factory()->makeOne()->toArray();

        $response = $this->post('/consumer-create', $data);
        dump($response->json());
        $response->assertStatus(201);
    }
    
    public function testUpdate()
    {
        $consumer = Consumer::first();
        Auth::guard('consumer')->login($consumer);
        $data = Consumer::factory()->makeOne()->toArray();
        $response = $this->put('/consumer-update', $data);
        dump($response->json());
        $response->assertStatus(200);
    }
    
    public function testPassword()
    {
        $consumer = Consumer::first();
        Auth::guard('consumer')->login($consumer);
        $data['password'] = $this->faker->password;

        $response = $this->put('/consumer-update-password', $data);
        dump($response->json());
        $response->assertStatus(200);
    }
}
