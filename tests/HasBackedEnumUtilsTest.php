<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests;

use Ilyes512\EnumUtils\Tests\Enums\BackedEnumUtils\BackedColors;

class HasBackedEnumUtilsTest extends UnitTestCase
{
    public function testNamesWithBackedEnum(): void
    {
        $names = BackedColors::names();

        self::assertSame(['RED', 'GREEN', 'BLUE'], $names);
    }

    public function testValuesWithBackedEnum(): void
    {
        $names = BackedColors::values();

        self::assertSame(['red', 'green', 'blue'], $names);
    }
}
