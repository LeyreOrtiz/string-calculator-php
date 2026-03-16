<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function givenStringOneReturnsNumberOne(): void
    {
        $calculator = new StringCalculator();
        $result = $calculator->add("1");
        $this->assertEquals(1, $result);

    }

    /**
     * @test
     */
    public function givenStringEmptyReturnsNumberZero(): void
    {
        $calculator = new StringCalculator();
        $result = $calculator->add("");
        $this->assertEquals(0, $result);
    }
}