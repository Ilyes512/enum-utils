<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests\Enums\BackedEnumUtils;

use Ilyes512\EnumUtils\BackedEnumUtils;

enum Colors
{
    /**
     * @use BackedEnumUtils<int|string>
     */
    use BackedEnumUtils;

    case RED;
    case GREEN;
    case BLUE;
}
