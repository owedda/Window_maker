<?php

declare(strict_types=1);

namespace Tests\Unit;

use KetvirtaUzd\Window\Color\BlueWindow;
use KetvirtaUzd\Window\ColorDecorator;
use KetvirtaUzd\Window\Constants\WindowConstants;
use PHPUnit\Framework\TestCase;

class BlueWindowTest extends TestCase
{
    public function testGetWindowDescriptionCorrectTrue(): void
    {
        $windowMaterial = $this->getMockBuilder(ColorDecorator::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getWindowDescription'])
            ->getMock();
        $windowMaterial->method('getWindowDescription')
            ->willReturn(WindowConstants::PLASTIC_WINDOW);

        $blueWindow = new BlueWindow($windowMaterial);

        $answer = $blueWindow->getWindowDescription();
        $expected = WindowConstants::PLASTIC_WINDOW . " " . WindowConstants::BLUE_WINDOW;

        $this->assertEquals($expected, $answer);
    }
}
