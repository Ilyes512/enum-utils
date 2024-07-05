<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests\Enums\BackedEnumUtils;

use Ilyes512\EnumUtils\HasBackedEnumUtils;

enum Colors
{
    /**
     * @use HasBackedEnumUtils<int|string>
     */
    use HasBackedEnumUtils;

    case RED;
    case GREEN;
    case BLUE;
}
