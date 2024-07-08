<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests\Enums\EnumUtils;

use BackedEnum;
use Ilyes512\EnumUtils\HasEnumUtils;

/**
 * @implements BackedEnum<string>
 */
enum BackedColors: string
{
    use HasEnumUtils;

    case RED = 'red';
    case GREEN = 'green';
    case BLUE = 'blue';
}
