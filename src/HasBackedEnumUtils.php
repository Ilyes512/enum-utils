<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils;

/**
 * @template T of int|string
 */
trait HasBackedEnumUtils
{
    use HasEnumUtils;

    /**
     * @return list<int|string>
     * @phpstan-return list<T>
     */
    public static function values(): array
    {
        return EnumUtils::getValues(static::class);
    }
}
