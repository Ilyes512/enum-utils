<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests\Enums;

use Ilyes512\EnumUtils\HasEnumUtils;

enum Colors
{
    use HasEnumUtils;

    case RED;
    case GREEN;
    case BLUE;
}
