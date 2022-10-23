<?php

declare(strict_types=1);

namespace KetvirtaUzd\Window\Factories;

use KetvirtaUzd\Window\Color\BlueWindow;
use KetvirtaUzd\Window\Color\BrownWindow;
use KetvirtaUzd\Window\Color\RedWindow;
use KetvirtaUzd\Window\Constants\WindowColorFactoryConstants;
use KetvirtaUzd\Window\WindowDecoratorInterface;

class WindowColorFactory
{
    public function getWindow(WindowDecoratorInterface $windowMaterial, string $color): WindowDecoratorInterface
    {
        return match ($color) {
            WindowColorFactoryConstants::RED => new RedWindow($windowMaterial),
            WindowColorFactoryConstants::BROWN => new BrownWindow($windowMaterial),
            WindowColorFactoryConstants::BLUE => new BlueWindow($windowMaterial),
            default => $windowMaterial
        };
    }
}
