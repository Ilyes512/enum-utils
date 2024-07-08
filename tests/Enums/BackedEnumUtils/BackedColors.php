<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests\Enums\BackedEnumUtils;

use BackedEnum;
use Ilyes512\EnumUtils\HasBackedEnumUtils;

/**
 * @implements BackedEnum<string>
 */
enum BackedColors: string
{
    /**
     * @use HasBackedEnumUtils<string>
     */
    use HasBackedEnumUtils;

    case RED = 'red';
    case GREEN = 'green';
    case BLUE = 'blue';
}
