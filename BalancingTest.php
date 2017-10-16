<?php

require_once __DIR__.'/vendor/autoload.php';
require __DIR__.'/is_balanced.php';

class BalancingTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return void
     */
    public function testHelloWorld()
    {
        $this->assertEquals(-1, isBalanced('Hello World'));
    }

    /**
     * @return void
     */
    public function testBasicBraces()
    {
        $this->assertEquals(-1, isBalanced('{}'));
    }

    /**
     * @return void
     */
    public function testCrazyBalancedBraces()
    {
        $this->assertEquals(-1, isBalanced('{{{foo();}}}{}'));
    }

    /**
     * @return void
     */
    public function testBalancedInteriorPairs()
    {
        $this->assertEquals(-1, isBalanced('{{}{}}'));
    }

    /**
     * @return void
     */
    public function testImblanacedThreeOpenOneClosed()
    {
        $this->assertEquals(0, isBalanced('{{{}'));
    }

    /**
     * @return void
     */
    public function testLonelyClosingBrace()
    {
        $this->assertEquals(0, isBalanced('}'));
    }

    /**
     * @return void
     */
    public function testImblanacedUnclosedAt2()
    {
        $this->assertEquals(2, isBalanced('{}{foo{}'));
    }
}
