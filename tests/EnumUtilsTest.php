<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests;

use Ilyes512\EnumUtils\EnumUtils;
use Ilyes512\EnumUtils\Tests\Enums\BackedColors;
use Ilyes512\EnumUtils\Tests\Enums\Colors;

final class EnumUtilsTest extends UnitTestCase
{
    public function testGetNamesOnUnitEnum(): void
    {
        $names = EnumUtils::getNames(Colors::class);

        self::assertSame(['RED', 'GREEN', 'BLUE'], $names);
    }

    public function testGetNamesOnBackedEnum(): void
    {
        $names = EnumUtils::getNames(BackedColors::class);

        self::assertSame(['RED', 'GREEN', 'BLUE'], $names);
    }

    public function testGetValuesOnBackedEnum(): void
    {
        $names = EnumUtils::getValues(BackedColors::class);

        self::assertSame(['red', 'green', 'blue'], $names);
    }
}
