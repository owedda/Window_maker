<?php

declare(strict_types=1);

namespace KetvirtaUzd\Window\Color;

use KetvirtaUzd\Window\ColorDecorator;
use KetvirtaUzd\Window\Constants\WindowConstants;

class RedWindow extends ColorDecorator
{
    public function getWindowDescription(): string
    {
        return parent::getWindowDescription() . " " . WindowConstants::RED_WINDOW;
    }
}
