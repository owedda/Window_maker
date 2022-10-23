<?php

declare(strict_types=1);

use KetvirtaUzd\Window\Expert\AluminumExpert;
use KetvirtaUzd\Window\Expert\PlasticExpert;
use KetvirtaUzd\Window\Factories\WindowColorFactory;
use KetvirtaUzd\Window\Material\AluminumWindow;
use KetvirtaUzd\Window\Material\PlasticWindow;

require "vendor/autoload.php";

$windowColorFactory = new WindowColorFactory();
$operation = $windowColorFactory->getWindow(new PlasticWindow(), "Blue");
echo $operation->getWindowDescription();

echo "\n";

$worker = new AluminumWindow();
$worker->setStrategy(new AluminumExpert());
echo $worker->installStrategy();
