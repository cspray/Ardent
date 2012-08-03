<?php
namespace Spl;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-07-16 at 17:08:21.
 */
class ArrayStackTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var ArrayStack
     */
    protected $stack;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->stack = new ArrayStack;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
    }

    /**
     * @covers Spl\ArrayStack::push
     */
    public function testPush() {
        $this->stack->push(0);
        $this->assertCount(1, $this->stack);

        $this->stack->push(0);
        $this->assertCount(2, $this->stack);
    }

    /**
     * @covers Spl\ArrayStack::pop
     * @depends testPush
     */
    public function testPop() {
        $inItem = 0;
        $this->stack->push($inItem);

        $outItem = $this->stack->pop();

        $this->assertEquals($inItem, $outItem);
        $this->assertCount(0, $this->stack);
    }

    /**
     * @covers Spl\ArrayStack::pop
     * @expectedException \Spl\UnderflowException
     */
    public function testPopException() {
        $this->stack->pop();
    }

    /**
     * @covers Spl\ArrayStack::peek
     * @depends testPush
     */
    public function testPeek() {
        $inItem = 0;
        $this->stack->push($inItem);

        $peekedItem = $this->stack->peek();

        $this->assertEquals($inItem, $peekedItem);
        $this->assertCount(1, $this->stack);
    }

    /**
     * @covers Spl\ArrayStack::peek
     * @expectedException \Spl\UnderflowException
     */
    public function testPeekException() {
        $this->stack->peek();
    }

    /**
     * @covers Spl\ArrayStack::current
     * @covers Spl\ArrayStack::key
     * @covers Spl\ArrayStack::next
     * @covers Spl\ArrayStack::valid
     * @covers Spl\ArrayStack::rewind
     * @depends testPush
     */
    public function testIterator() {

    }

    /**
     * @covers Spl\ArrayStack::clear
     * @depends testPush
     */
    public function testClear() {
        $this->stack->push(0);

        $this->stack->clear();
        $this->assertCount(0, $this->stack);
    }

    /**
     * @covers Spl\ArrayStack::contains
     * @depends testPush
     */
    public function testContains() {
        $item = 0;
        $this->assertFalse($this->stack->contains($item));
        $this->stack->push($item);
        $this->assertTrue($this->stack->contains($item));
    }

    /**
     * @covers Spl\ArrayStack::isEmpty
     * @depends testPush
     */
    public function testIsEmpty() {
        $this->assertTrue($this->stack->isEmpty());
        $this->stack->push(0);
        $this->assertFalse($this->stack->isEmpty());
    }

}