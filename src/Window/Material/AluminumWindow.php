<?php

declare(strict_types=1);

namespace KetvirtaUzd\Window\Material;

use KetvirtaUzd\Window\Constants\InvalidValueConstants;
use KetvirtaUzd\Window\Constants\WindowConstants;
use KetvirtaUzd\Window\WindowInterface;
use KetvirtaUzd\Window\WindowStrategyInterface;

class AluminumWindow implements WindowInterface
{
    private WindowStrategyInterface $strategy;

    public function getWindowDescription(): string
    {
        return WindowConstants::ALUMINUM_WINDOW;
    }

    public function setStrategy(WindowStrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function installStrategy(): string
    {
        if (!isset($this->strategy)) {
            return InvalidValueConstants::INVALID_STRATEGY;
        }
        return $this->strategy->install($this->getWindowDescription());
    }
}
