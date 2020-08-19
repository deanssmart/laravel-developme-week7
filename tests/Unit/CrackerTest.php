<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Cracker;

class CrackerTest extends TestCase
{
    public function setUp() : void
    {
        $this->cracker = new Cracker("! ) # ( . * % & > < @ a b c d e f g h i j k l m n o");
    }

    public function testH()
    {
        $this->assertSame("h", $this->cracker->decrypt("&"));
    } 

    public function testE()
    {
        $this->assertSame("e", $this->cracker->decrypt("."));
    } 

    public function testL()
    {
        $this->assertSame("l", $this->cracker->decrypt("a"));
    } 

    public function testO()
    {
        $this->assertSame("o", $this->cracker->decrypt("d"));
    } 

    public function testHello()
    {
        $this->assertSame("hello", $this->cracker->decrypt("&.aad"));
    } 

    public function testHelloMum()
    {
        $this->assertSame("hello mum", $this->cracker->decrypt("&.aad bjb"));
    } 

    public function testILoveCode()
    {
        $this->assertSame("i love code", $this->cracker->decrypt("> adk. #d(."));
    } 

}
