<?php

namespace Tests\Unit;

use App\Treatment;
use Tests\TestCase;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;


class TreatmentTest extends TestCase
{
    use RefreshDatabase;

    public function testFromString()
    {
        //call the Treatment::fromString static method
        $result = Treatment::fromString("Test");

        //check we get back a Treatment
        //using assertInstanceOf to check the class
        $this->assertInstanceOf(Treatment::class, $result);

        //check the tag has the right name
        $this->assertSame("Test", $result->name);

        //test a different treatment
        $result = Treatment::fromString("AnotherTest");
        $this->assertInstanceOf(Treatment::class, $result);
        $this->assertSame("AnotherTest", $result->name);   
        
        //check treatment is stored in DB
        $treatmentFromDB = Treatment::first();
        $this->assertInstanceOf(Treatment::class, $treatmentFromDB);
        $this->assertSame("Test", $treatmentFromDB->name);

        //test no duplicates
        $result = Treatment::fromString("Test");
        $allTreatments = Treatment::where("name", "Test");
        $this->assertSame(1, $allTreatments->count());

        // test whitespace is removed
        $result = Treatment::fromString("   yetAnotherTest ");
        $this->assertSame("yetAnotherTest", $result->name);
        
        // check only "Test" and "AnotherTest" are in the database
        $treatmentsFromDB = Treatment::all();
        $this->assertSame(3, $treatmentsFromDB->count());

    }

    public function testFromStrings()
    {
        //call the fromStrings method
        $result = Treatment::fromStrings(["Test", "anotherTest"]);

        //check it's a Collection
        $this->assertInstanceOf(Collection::class, $result);

        //check the first item is "Test"
        $this->assertSame("Test", $result[0]->name);

        //check the second item is "Hammock"
        $this->assertSame("anotherTest", $result[1]->name);



    }


}
