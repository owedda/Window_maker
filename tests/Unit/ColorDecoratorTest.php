<?php

declare(strict_types=1);

namespace Tests\Unit;

use KetvirtaUzd\Window\ColorDecorator;
use KetvirtaUzd\Window\Constants\WindowConstants;
use KetvirtaUzd\Window\WindowDecoratorInterface;
use PHPUnit\Framework\TestCase;

class ColorDecoratorTest extends TestCase
{
    public function testGetWindowDescriptionEqualsTrue()
    {
        $mockInterface = $this->getMockBuilder(WindowDecoratorInterface::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getWindowDescription'])
            ->getMock();

        $mockInterface->method('getWindowDescription')
            ->willReturn(WindowConstants::PLASTIC_WINDOW);

        $decorator = new ColorDecorator($mockInterface);
        $actual = $decorator->getWindowDescription();

        $this->assertEquals(WindowConstants::PLASTIC_WINDOW, $actual);
    }
}
