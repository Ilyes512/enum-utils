<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils;

use BackedEnum;
use Closure;

/**
 * @template R of int|string
 */
trait BackedEnumUtils
{
    use EnumUtils;

    /**
     * @return list<int|string>
     * @phpstan-return list<R>
     */
    public static function values(): array
    {
        Assert::isAOf(static::class, BackedEnum::class, 'The method can only be used by a backed enum');

        /**
         * @var Closure(BackedEnum):R $closure
         */
        $closure = static fn(BackedEnum $e): int|string => $e->value;

        return array_map($closure, static::cases());
    }
}
