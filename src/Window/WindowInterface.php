<?php

declare(strict_types=1);

namespace KetvirtaUzd\Window;

interface WindowInterface extends WindowDecoratorInterface
{
    public function setStrategy(WindowStrategyInterface $strategy): void;
    public function installStrategy(): string;
}
