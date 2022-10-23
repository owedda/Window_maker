<?php

declare(strict_types=1);

namespace Tests\Unit\Material;

use KetvirtaUzd\Window\Constants\ExpertConstants;
use KetvirtaUzd\Window\Constants\InvalidValueConstants;
use KetvirtaUzd\Window\Constants\WindowConstants;
use KetvirtaUzd\Window\Material\PlasticWindow;
use KetvirtaUzd\Window\WindowStrategyInterface;
use PHPUnit\Framework\TestCase;

class PlasticWindowTest extends TestCase
{
    public function testGetWindowDescriptionEqualsTrue(): void
    {
        $window = new PlasticWindow();

        $actual = $window->getWindowDescription();

        $this->assertEquals(WindowConstants::PLASTIC_WINDOW, $actual);
    }

    public function testInstallStrategyWhenStrategyIsSetEqualsTrue(): void
    {
        $window = new PlasticWindow();
        $expected = $window->getWindowDescription() . " " . ExpertConstants::PLASTIC_EXPERT;

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
        $window = new PlasticWindow();
        $installValue = $window->getWindowDescription() . " " . ExpertConstants::PLASTIC_EXPERT;

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
