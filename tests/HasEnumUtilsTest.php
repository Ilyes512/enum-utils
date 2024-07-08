<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests;

use Ilyes512\EnumUtils\Tests\Enums\BackedColors;
use Ilyes512\EnumUtils\Tests\Enums\Colors;

class HasEnumUtilsTest extends UnitTestCase
{
    public function testNamesWithBackedEnum(): void
    {
        $names = BackedColors::names();

        self::assertSame(['RED', 'GREEN', 'BLUE'], $names);
    }

    public function testNamesWithPureEnum(): void
    {
        $names = Colors::names();

        self::assertSame(['RED', 'GREEN', 'BLUE'], $names);
    }
}
