<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Owner;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    use RefreshDatabase;

    public function setUp() : void
    {
        parent::setUp();

        Owner::create([
            "first_name" => "Test",
            "last_name" => "Owner",
            "telephone" => "07905963264",
            "email" => "captain@homestead.test",
            "address_1" => "Flat Test",
            "address_2" => "Test Street",
            "town" => "Testville",
            "postcode" => "TE5 5TS",
        ]);
    }

    public function testRoute()
    {
        $ownerFromDB = Owner::first();

        $response = $this->get('/');
        $response->assertStatus(200);

        $response2 = $this->get('NotAPage');
        $response2->assertStatus(404);
    }
}

