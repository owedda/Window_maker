<?php

declare(strict_types=1);

namespace Tests\Unit\Expert;

use KetvirtaUzd\Window\Constants\ExpertConstants;
use KetvirtaUzd\Window\Constants\WindowConstants;
use KetvirtaUzd\Window\Expert\AluminumExpert;
use PHPUnit\Framework\TestCase;

class AluminumExpertTest extends TestCase
{
    public function testInstallCorrectTrue(): void
    {
        $expert = new AluminumExpert();
        $expected = WindowConstants::PLASTIC_WINDOW . " " . ExpertConstants::ALUMINUM_EXPERT;

        $actual = $expert->install(WindowConstants::PLASTIC_WINDOW);

        $this->assertEquals($expected, $actual);
    }
}
