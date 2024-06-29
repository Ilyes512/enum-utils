<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests\Feature;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

abstract class FeatureTestCase extends PHPUnitTestCase
{
    use MockeryPHPUnitIntegration;
}
