<?php

namespace Tests;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Advertiser;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AdvertiserTest extends TestCase
{
    use WithFaker;

    public function testStore()
    {
        $data = Advertiser::factory()->makeOne()->toArray();

        $response = $this->post('/advertiser-create', $data);
        dump($response->json());
        $response->assertStatus(201);
    }

    public function testUpdate()
    {
        $advertiser = Advertiser::first();
        Auth::guard('advertiser')->login($advertiser);
        $data = Advertiser::factory()->makeOne()->toArray();
        $response = $this->put('/advertiser-update', $data);
        dump($response->json());
        $response->assertStatus(200);
    }

    public function testPassword()
    {
        $advertiser = Advertiser::first();
        Auth::guard('advertiser')->login($advertiser);
        $data['password'] = $this->faker->password;

        $response = $this->put('/advertiser-update-password', $data);
        dump($response->json());
        $response->assertStatus(200);
    }
}
