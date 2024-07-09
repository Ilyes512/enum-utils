<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils;

use BackedEnum;
use Closure;
use Ilyes512\EnumUtils\Exceptions\EnumUtilsValueError;
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

    /**
     * @template T of UnitEnum
     *
     * @param class-string<T> $enum
     *
     * @return T
     */
    public static function fromName(string $enum, string $name): UnitEnum
    {
        if (!in_array($name, static::getNames($enum), strict: true)) {
            throw new EnumUtilsValueError("'$name' is not a valid name for '$enum'");
        }

        /** @var T */
        return constant("$enum::$name");
    }

    /**
     * @template T of UnitEnum
     *
     * @param class-string<T> $enum
     *
     * @return ?T
     */
    public static function tryFromName(string $enum, string $name): ?UnitEnum
    {
        try {
            return static::fromName($enum, $name);
        } catch (EnumUtilsValueError) {
            return null;
        }
    }
}
