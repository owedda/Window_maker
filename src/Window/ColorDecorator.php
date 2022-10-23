<?php

declare(strict_types=1);

namespace KetvirtaUzd\Window;

class ColorDecorator implements WindowDecoratorInterface
{
    public function __construct(protected WindowDecoratorInterface $material)
    {
    }

    public function getWindowDescription(): string
    {
        return $this->material->getWindowDescription();
    }
}
