<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Owner;

class FullNameTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testFullName()
    {
        $owner = new Owner();

        $owner->first_name = "Dean";
        $owner->last_name = "Smart";

        $this->assertSame($owner->fullName(), "Dean Smart");
    }
}
