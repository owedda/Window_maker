<?php

declare(strict_types=1);

namespace KetvirtaUzd\Window\Color;

use KetvirtaUzd\Window\ColorDecorator;
use KetvirtaUzd\Window\Constants\WindowConstants;

class BrownWindow extends ColorDecorator
{
    public function getWindowDescription(): string
    {
        return parent::getWindowDescription() . " " . WindowConstants::BROWN_WINDOW;
    }
}
