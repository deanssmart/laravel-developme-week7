<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Owner;

class BananaTest extends TestCase
{
    public function testBananas()
    {
        $this->assertSame(Owner::haveWeBananas(0), "No we have no bananas");
        $this->assertSame(Owner::haveWeBananas(2), "Yes we have 2 bananas");
        
        $this->assertSame(Owner::haveWeBananas(1), "Yes we have 1 banana");
        $this->assertSame(Owner::haveWeBananas(-12), "No we have no bananas");
    }
}
