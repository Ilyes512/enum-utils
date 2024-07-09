<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests;

use Ilyes512\EnumUtils\EnumUtils;
use Ilyes512\EnumUtils\Exceptions\EnumUtilsValueError;
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

    public function testFromName(): void
    {
        $result = EnumUtils::fromName(Colors::class, Colors::RED->name);

        self::assertSame(Colors::RED, $result);
    }

    public function testFromNameWithInvalidValue(): void
    {
        $expectedMessage = sprintf("'INVALID' is not a valid name for '%s'", Colors::class);

        self::expectException(EnumUtilsValueError::class);
        self::expectExceptionMessage($expectedMessage);

        EnumUtils::fromName(Colors::class, 'INVALID');
    }

    public function testTryFromName(): void
    {
        $result = EnumUtils::tryFromName(Colors::class, Colors::RED->name);

        self::assertSame(Colors::RED, $result);
    }

    public function testTryFromNameWithInvalidValue(): void
    {
        $result = EnumUtils::tryFromName(Colors::class, 'INVALID');

        self::assertNull($result);
    }
}
