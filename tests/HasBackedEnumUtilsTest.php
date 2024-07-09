<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests;

use Ilyes512\EnumUtils\Exceptions\EnumUtilsValueError;
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

    public function testFromNameBackedEnum(): void
    {
        $result = BackedColors::fromName(BackedColors::RED->name);

        self::assertSame(BackedColors::RED, $result);
    }

    public function testFromNameWithInvalidValueBackedEnum(): void
    {
        $expectedMessage = sprintf("'INVALID' is not a valid name for '%s'", BackedColors::class);

        self::expectException(EnumUtilsValueError::class);
        self::expectExceptionMessage($expectedMessage);

        BackedColors::fromName('INVALID');
    }

    public function testTryFromNameBackedEnum(): void
    {
        $result = BackedColors::tryFromName(BackedColors::RED->name);

        self::assertSame(BackedColors::RED, $result);
    }

    public function testTryFromNameWithInvalidValueBackedEnum(): void
    {
        $result = BackedColors::tryFromName('INVALID');

        self::assertNull($result);
    }
}
