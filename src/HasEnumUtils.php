<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils;

use UnitEnum;

trait HasEnumUtils
{
    /**
     * @return list<string>
     */
    public static function names(): array
    {
        return EnumUtils::getNames(static::class);
    }

    /**
     * @return static
     */
    public static function fromName(string $name): UnitEnum
    {
        return EnumUtils::fromName(static::class, $name);
    }

    /**
     * @return ?static
     */
    public static function tryFromName(string $name): ?UnitEnum
    {
        return EnumUtils::tryFromName(static::class, $name);
    }
}
