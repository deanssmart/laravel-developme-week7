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
        $result = Treatment::fromString("test");

        //check we get back a Treatment
        //using assertInstanceOf to check the class
        $this->assertInstanceOf(Treatment::class, $result);

        //check the tag has the right name
        $this->assertSame("test", $result->name);

        //test a different treatment
        $result = Treatment::fromString("anothertest");
        $this->assertInstanceOf(Treatment::class, $result);
        $this->assertSame("anothertest", $result->name);   
        
        //check treatment is stored in DB
        $treatmentFromDB = Treatment::first();
        $this->assertInstanceOf(Treatment::class, $treatmentFromDB);
        $this->assertSame("test", $treatmentFromDB->name);

        //test no duplicates
        $result = Treatment::fromString("test");
        $allTreatments = Treatment::where("name", "test");
        $this->assertSame(1, $allTreatments->count());

        //test whitespace is removed
        $result = Treatment::fromString("   yetAnotherTest ");
        $this->assertSame("yetanothertest", $result->name);

        //test converted to lower
        $result = Treatment::fromString("CAPTEST");
        $this->assertSame("captest", $result->name);

        //check only "Test" and "AnotherTest" are in the database
        $treatmentsFromDB = Treatment::all();
        $this->assertSame(4, $treatmentsFromDB->count());

    }

    public function testFromStrings()
    {
        //call the fromStrings method
        $result = Treatment::fromStrings(["Test", "anotherTest", "Test"]);
        // dd($result->pluck("name"));

        //check it's a Collection
        $this->assertInstanceOf(Collection::class, $result);

        //check the first item is "Test"
        $this->assertSame("test", $result[0]->name);

        //check the second item is "anotherTest"
        $this->assertSame("anothertest", $result[1]->name);

        // check only "Test" and "AnotherTest" are in the database
        $treatmentsFromDB = Treatment::all();
        $this->assertSame(2, $treatmentsFromDB->count());

    }


}
