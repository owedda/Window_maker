<?php

declare(strict_types=1);

namespace KetvirtaUzd\Window;

interface WindowStrategyInterface
{
    public function install(string $description): string;
}
