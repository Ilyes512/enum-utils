<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests;

use Ilyes512\EnumUtils\Tests\Enums\EnumUtils\BackedColors;
use Ilyes512\EnumUtils\Tests\Enums\EnumUtils\Colors;

class EnumUtilsTest extends UnitTestCase
{
    public function testNamesWithBackedEnum(): void
    {
        $names = BackedColors::names();

        $this->assertSame(['RED', 'GREEN', 'BLUE'], $names);
    }

    public function testNamesWithPureEnum(): void
    {
        $names = Colors::names();

        $this->assertSame(['RED', 'GREEN', 'BLUE'], $names);
    }
}
