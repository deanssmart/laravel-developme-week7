<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Diamond;

class DiamondTest extends TestCase
{
    public function setUp() : void
    {
        $this->diamond = new Diamond();
    }

    public function testA()
    {
        $this->assertSame("A\n", $this->diamond->form("A"));
    } 

    // public function testb_should_give_sequence()
    // {
    //     $this->assertSame('AB', $this->diamond->form('B'));
    // }
    /**
     * delete testb_should_give_sequence before running/solving this
     */
    // public function testb_should_repeat_chars()
    // {
    //     $this->assertSame('ABB', $this->diamond->form('B'));
    // }
    /**
     * delete testb_should_repeat_chars before running/solving this
     */
    // public function testb_should_have_separate_lines()
    // {
    //     $this->assertSame("A\nBB\n", $this->diamond->form('B'));
    // }

    // public function testc_should_have_separate_lines()
    // {
    //     $this->assertSame("A\nBB\nCC\n", $this->diamond->form('C'));
    // }

    // public function test_should_have_correct_outer_spacing()
    // {
    //     $this->assertSame("__A__\n_BB_\nCC\n", $this->diamond->form('C'));
    // }
    
    public function test_should_have_correct_inner_spacing()
    {
        $this->assertSame("__A__\n_B_B_\nC___C\n", $this->diamond->form('C'));
    }

    public function testD()
    {
        $this->assertSame("___A___\n__B_B__\n_C___C_\nD_____D\n", $this->diamond->form('D'));
    }

    public function test_should_mirror_top()
    {
        $this->assertSame("__A__\n_B_B_\n__A__\n", $this->diamond->form('B')); 
    }

}
