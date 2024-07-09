<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests;

use Ilyes512\EnumUtils\Exceptions\EnumUtilsValueError;
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

    public function testFromNameWithPureEnum(): void
    {
        $result = Colors::fromName(Colors::RED->name);

        self::assertSame(Colors::RED, $result);
    }

    public function testFromNameWithInvalidValueWithPureEnum(): void
    {
        $expectedMessage = sprintf("'INVALID' is not a valid name for '%s'", Colors::class);

        self::expectException(EnumUtilsValueError::class);
        self::expectExceptionMessage($expectedMessage);

        Colors::fromName('INVALID');
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

    public function testTryFromNameWithPureEnum(): void
    {
        $result = Colors::tryFromName(Colors::RED->name);

        self::assertSame(Colors::RED, $result);
    }

    public function testTryFromNameWithInvalidValueWithPureEnum(): void
    {
        $result = Colors::tryFromName('INVALID');

        self::assertNull($result);
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
