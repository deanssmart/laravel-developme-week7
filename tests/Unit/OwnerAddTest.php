<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Owner;

class OwnerAddTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAdd()
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

        //get the first owner back from the database
        $owner = Owner::first();

        //check details
        $this->assertSame($owner->first_name, 'Test');
        $this->assertSame($owner->last_name, 'Owner');
        $this->assertSame($owner->telephone, '07905963264');
        $this->assertSame($owner->email, 'captain@homestead.test');
        $this->assertSame($owner->address_1, 'Flat Test');
        $this->assertSame($owner->address_2, 'Test Street');
        $this->assertSame($owner->town, 'Testville');
        $this->assertSame($owner->postcode, 'TE5 5TS');
    }
}
