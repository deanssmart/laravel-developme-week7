<?php

namespace Tests\Unit;

use App\Owner;
use App\Animal;
use App\Treatment;
use Tests\TestCase;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;


class AnimalTest extends TestCase
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

    public function testfields()
    {        
        $owner = Owner::first();

        $animal = new Animal([
            "name" => "Test Pet",
            "type" => "Catdog",
            "dob" => "2015-06-20",
            "weight" => "15",
            "height" => "2",
            "biteyness" => "3",
        ]);
        
        $owner->animals()->save($animal);
        $animal->setTreatments(["treatment1", "treatment2"]);

        //check details
        $this->assertSame($animal->name, "Test Pet");
        $this->assertSame($animal->type, "Catdog");
        $this->assertSame($animal->dob, "2015-06-20");
        $this->assertSame($animal->weight, "15");
        $this->assertSame($animal->height, "2");
        $this->assertSame($animal->biteyness, "3");
        $this->assertSame($animal->owner_id, 1);
        $this->assertSame($animal->treatments->pluck("name")->all(), ["treatment1", "treatment2"]);

        
  

    }
}

