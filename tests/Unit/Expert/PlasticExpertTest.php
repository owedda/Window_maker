<?php

namespace Tests\Unit\Expert;

use KetvirtaUzd\Window\Constants\ExpertConstants;
use KetvirtaUzd\Window\Constants\WindowConstants;
use KetvirtaUzd\Window\Expert\PlasticExpert;
use PHPUnit\Framework\TestCase;

class PlasticExpertTest extends TestCase
{
    public function testInstallCorrectTrue(): void
    {
        $expert = new PlasticExpert();
        $expected = WindowConstants::PLASTIC_WINDOW . " " . ExpertConstants::PLASTIC_EXPERT;

        $actual = $expert->install(WindowConstants::PLASTIC_WINDOW);

        $this->assertEquals($expected, $actual);
    }
}
