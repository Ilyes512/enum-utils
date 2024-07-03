<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests;

use Ilyes512\EnumUtils\Exceptions\InvalidArgumentException;
use Ilyes512\EnumUtils\Tests\Enums\BackedEnumUtils\BackedColors;
use Ilyes512\EnumUtils\Tests\Enums\BackedEnumUtils\Colors;

class BackedEnumUtilsTest extends UnitTestCase
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

    public function testValuesWithBackedEnum(): void
    {
        $names = BackedColors::values();

        $this->assertSame(['red', 'green', 'blue'], $names);
    }

    public function testValuesWithPureEnum(): void
    {
        $this->expectExceptionObject(new InvalidArgumentException('The method can only be used by a backed enum'));

        Colors::values();
    }
}
