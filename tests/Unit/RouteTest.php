<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Owner;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRouteTest()
    {
        //make owner in database
        $owner = new Owner();
        $owner->first_name = 'Test';
        $owner->last_name = 'Owner';
        $owner->telephone = '07905963264';
        $owner->email = 'captain@homestead.test';
        $owner->address_1 = 'Flat Test';
        $owner->address_2 = 'Test Street';
        $owner->town = 'Testville';
        $owner->postcode = 'TE5 5TS';
        $owner->save();

        //make owner in database
        $owner2 = new Owner();
        $owner2->first_name = 'Test2';
        $owner2->last_name = 'Owner2';
        $owner2->telephone = '07905963265';
        $owner2->email = 'captain2@homestead.test';
        $owner2->address_1 = 'Flat 2 Test';
        $owner2->address_2 = 'Test Streets';
        $owner2->town = 'Testvilles';
        $owner2->postcode = 'TE5 5T2';
        $owner2->save();
        

        $response = $this->get('/');
        $response->assertStatus(200);

        $response2 = $this->get('NotAPage');
        $response2->assertStatus(404);
    }
}

