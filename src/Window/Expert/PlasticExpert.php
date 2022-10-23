<?php

declare(strict_types=1);

namespace KetvirtaUzd\Window\Expert;

use KetvirtaUzd\Window\Constants\ExpertConstants;
use KetvirtaUzd\Window\WindowStrategyInterface;

class PlasticExpert implements WindowStrategyInterface
{
    public function install(string $description): string
    {
        return $description . " " . ExpertConstants::PLASTIC_EXPERT;
    }
}
