<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils;

use BackedEnum;
use Closure;
use UnitEnum;

readonly class EnumUtils
{
    /**
     * @param class-string<UnitEnum> $enum
     *
     * @return list<string>
     */
    public static function getNames(string $enum): array
    {
        return array_map(static fn(UnitEnum $e): string => $e->name, $enum::cases());
    }

    /**
     * @template T of string|int
     *
     * @param class-string<BackedEnum<T>> $enum
     *
     * @return list<T>
     */
    public static function getValues(string $enum): array
    {
        /**
         * @var Closure(BackedEnum<T>):T $closure
         */
        $closure = static fn(BackedEnum $e): int|string => $e->value;

        return array_map($closure, $enum::cases());
    }
}
