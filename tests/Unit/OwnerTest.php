<?php

namespace Tests\Unit;

use App\Owner;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;


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

    public function testEmail()
    { 
        $ownerFromDB = Owner::first();
        $this->assertDatabaseHas('owners', [
            'email' => 'captain@homestead.test',
        ]);

        $this->assertDatabaseMissing('owners', [
            'email' => 'sir@homestead.test',
        ]);

        // Could also use the checkExistingEmail method in owners:
        // $this->assertTrue($ownerFromDB->checkExistingEmail("captain@homestead.test"));
        //     $this->assertFalse($ownerFromDB->checkExistingEmail("sir@homestead.test"));

    }

}


