<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils;

trait HasEnumUtils
{
    /**
     * @return list<string>
     */
    public static function names(): array
    {
        return EnumUtils::getNames(static::class);
    }
}
