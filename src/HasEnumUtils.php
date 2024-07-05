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
        return array_map(static fn(UnitEnum $e): string => $e->name, static::cases());
    }
}
