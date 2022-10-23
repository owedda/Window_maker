<?php

declare(strict_types=1);

namespace Tests\Unit\Factories;

use KetvirtaUzd\Window\Color\BlueWindow;
use KetvirtaUzd\Window\Color\BrownWindow;
use KetvirtaUzd\Window\Color\RedWindow;
use KetvirtaUzd\Window\Constants\WindowColorFactoryConstants;
use KetvirtaUzd\Window\Factories\WindowColorFactory;
use KetvirtaUzd\Window\WindowDecoratorInterface;
use PHPUnit\Framework\TestCase;

class WindowColorFactoryTest extends TestCase
{
    public function testGetWindowWithColorRedEqualsTrue()
    {
        $factory = new WindowColorFactory();
        $color = WindowColorFactoryConstants::RED;
        $mockInterface = $this->createMock(WindowDecoratorInterface::class);

        $actual = $factory->getWindow($mockInterface, $color);
        $expected = new RedWindow($mockInterface);

        $this->assertEquals($expected, $actual);
    }

    public function testGetWindowWithColorBrownEqualsTrue()
    {
        $factory = new WindowColorFactory();
        $color = WindowColorFactoryConstants::BROWN;
        $mockInterface = $this->createMock(WindowDecoratorInterface::class);

        $actual = $factory->getWindow($mockInterface, $color);
        $expected = new BrownWindow($mockInterface);

        $this->assertEquals($expected, $actual);
    }

    public function testGetWindowWithColorBlueEqualsTrue()
    {
        $factory = new WindowColorFactory();
        $color = WindowColorFactoryConstants::BLUE;
        $mockInterface = $this->createMock(WindowDecoratorInterface::class);

        $actual = $factory->getWindow($mockInterface, $color);
        $expected = new BlueWindow($mockInterface);

        $this->assertEquals($expected, $actual);
    }

    public function testGetWindowWithColorInvalidEqualsTrue()
    {
        $factory = new WindowColorFactory();
        $color = "";
        $mockInterface = $this->createMock(WindowDecoratorInterface::class);

        $actual = $factory->getWindow($mockInterface, $color);

        $this->assertEquals($mockInterface, $actual);
    }
}
