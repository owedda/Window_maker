<?php

namespace Tests\Unit;

use KetvirtaUzd\Window\Color\BrownWindow;
use KetvirtaUzd\Window\ColorDecorator;
use KetvirtaUzd\Window\Constants\WindowConstants;
use PHPUnit\Framework\TestCase;

class BrownWindowTest extends TestCase
{
    public function testGetWindowDescription(): void
    {
        $windowMaterial = $this->getMockBuilder(ColorDecorator::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getWindowDescription'])
            ->getMock();
        $windowMaterial->method('getWindowDescription')
            ->willReturn(WindowConstants::PLASTIC_WINDOW);

        $blueWindow = new BrownWindow($windowMaterial);

        $answer = $blueWindow->getWindowDescription();
        $expected = WindowConstants::PLASTIC_WINDOW . " " . WindowConstants::BROWN_WINDOW;

        $this->assertEquals($expected, $answer);
    }
}
