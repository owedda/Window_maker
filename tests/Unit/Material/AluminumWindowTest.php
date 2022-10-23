<?php

declare(strict_types=1);

namespace Tests\Unit\Material;

use KetvirtaUzd\Window\Constants\ExpertConstants;
use KetvirtaUzd\Window\Constants\InvalidValueConstants;
use KetvirtaUzd\Window\Constants\WindowConstants;
use KetvirtaUzd\Window\Material\AluminumWindow;
use KetvirtaUzd\Window\WindowStrategyInterface;
use PHPUnit\Framework\TestCase;

class AluminumWindowTest extends TestCase
{
    public function testGetWindowDescriptionEqualsTrue(): void
    {
        $window = new AluminumWindow();

        $actual = $window->getWindowDescription();

        $this->assertEquals(WindowConstants::ALUMINUM_WINDOW, $actual);
    }

    public function testInstallStrategyWhenStrategyIsSetEqualsTrue(): void
    {
        $window = new AluminumWindow();
        $expected = $window->getWindowDescription() . " " . ExpertConstants::ALUMINUM_EXPERT;

        $mockInterface = $this->getMockBuilder(WindowStrategyInterface::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['install'])
            ->getMock();

        $mockInterface->method('install')
            ->willReturn($expected);

        $window->setStrategy($mockInterface);
        $actual = $window->installStrategy();

        $this->assertEquals($expected, $actual);
    }

    public function testInstallStrategyWhenStrategyIsNotSetEqualsTrue(): void
    {
        $window = new AluminumWindow();
        $installValue = $window->getWindowDescription() . " " . ExpertConstants::ALUMINUM_EXPERT;

        $mockInterface = $this->getMockBuilder(WindowStrategyInterface::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['install'])
            ->getMock();

        $mockInterface->method('install')
            ->willReturn($installValue);

        $actual = $window->installStrategy();

        $this->assertEquals(InvalidValueConstants::INVALID_STRATEGY, $actual);
    }
}
