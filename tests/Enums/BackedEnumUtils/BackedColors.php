<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests\Enums\BackedEnumUtils;

use Ilyes512\EnumUtils\BackedEnumUtils;

enum BackedColors: string
{
    /**
     * @use BackedEnumUtils<string>
     */
    use BackedEnumUtils;

    case RED = 'red';
    case GREEN = 'green';
    case BLUE = 'blue';
}
