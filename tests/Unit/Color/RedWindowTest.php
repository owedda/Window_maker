<?php

namespace Tests\Unit;

use KetvirtaUzd\Window\Color\RedWindow;
use KetvirtaUzd\Window\ColorDecorator;
use KetvirtaUzd\Window\Constants\WindowConstants;
use PHPUnit\Framework\TestCase;

class RedWindowTest extends TestCase
{
    public function testGetWindowDescription(): void
    {
        $windowMaterial = $this->getMockBuilder(ColorDecorator::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getWindowDescription'])
            ->getMock();
        $windowMaterial->method('getWindowDescription')
            ->willReturn(WindowConstants::PLASTIC_WINDOW);

        $blueWindow = new RedWindow($windowMaterial);

        $answer = $blueWindow->getWindowDescription();
        $expected = WindowConstants::PLASTIC_WINDOW . " " . WindowConstants::RED_WINDOW;

        $this->assertEquals($expected, $answer);
    }
}
