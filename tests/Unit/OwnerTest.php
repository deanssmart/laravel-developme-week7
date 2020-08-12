<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Owner;

class OwnerTest extends TestCase
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

    public function testFields()
    {
        //get the first owner back from the database
        $ownerFromDB = Owner::first();

        //check details
        $this->assertSame($ownerFromDB->first_name, "Test");
        $this->assertSame($ownerFromDB->last_name, "Owner");
        $this->assertSame($ownerFromDB->telephone, "07905963264");
        $this->assertSame($ownerFromDB->email, "captain@homestead.test");
        $this->assertSame($ownerFromDB->address_1, "Flat Test");
        $this->assertSame($ownerFromDB->address_2, "Test Street");
        $this->assertSame($ownerFromDB->town, "Testville");
        $this->assertSame($ownerFromDB->postcode, "TE5 5TS");
    }

    public function testFullName()
    {
        $ownerFromDB = Owner::first();
        $this->assertSame($ownerFromDB->fullName(), "Test Owner");
    }

    public function testEmailExists()
    { 
        $ownerFromDB = Owner::first();
        $this->assertTrue($ownerFromDB->checkExistingEmail("captain@homestead.test"));
    }

    public function testEmailDoesNotExist()
    { 
        $ownerFromDB = Owner::first();
        $this->assertFalse($ownerFromDB->checkExistingEmail("sir@homestead.test"));
    }
}


