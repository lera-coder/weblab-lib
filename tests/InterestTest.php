<?php


class InterestTest extends \PHPUnit\Framework\TestCase
{

    private $inter1;
    private $inter2;

    protected function setUp() : void {
        $this->inter1 = new \Valery\InterestPack\Interest(50000, 10, 3);
        $this->inter2 = new \Valery\InterestPack\Interest("Hi", 10, 3);
    }

    protected function tearDown() : void {

    }

    public function testCompoundInterest(){
        $this->assertEquals(66550, $this->inter1->compoundInterest());
    }

    public function testSimpleInterest(){
        $this->assertEquals(65000, $this->inter1->simpleInterest());
    }

    public function testCompoundInvalidData(){
        $this->assertEquals(NULL, $this->inter2->compoundInterest());
    }

    public function testSimpleInvalidData(){
        $this->assertEquals(NULL, $this->inter2->simpleInterest());
    }

}
