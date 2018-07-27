<?php

namespace tests\Unit;

use App\Calculator;
use \PHPUnit\Framework\TestCase as TestCase;

class CalculatorTest extends TestCase
{

    public function testItSetsAndGetsResult(): void
    {
        ($objCalculator = new Calculator())->setResult(100);
        $this->assertEquals(100, $objCalculator->getResult());
    }

    public function testItReturnsResult(): void
    {
        ($objCalculator = new Calculator())->setResult(133);
        $this->assertEquals($objCalculator->getResult(), 133);
    }

    public function testItResetsResult(): void
    {
        ($objCalculator = new Calculator())->setResult(98118);
        $objCalculator->reset();
        $this->assertEquals(0, $objCalculator->getResult());
    }

    public function testItSumsTheUserInput(): void
    {
        ($objCalculator = new Calculator())->sum(1, 3, 5);
        $this->assertEquals(9, $objCalculator->getResult());
    }

    public function testItMultipliesTheUserInput(): void
    {
        ($objCalculator = new Calculator())->multiply(1, 3, 5);
        $this->assertEquals(15, $objCalculator->getResult());
    }

    public function testItDividesTheUserInput(): void
    {
        ($objCalculator = new Calculator())->setResult(100);
        $objCalculator->divide(2, 2);
        $this->assertEquals(25, $objCalculator->getResult());
    }

}