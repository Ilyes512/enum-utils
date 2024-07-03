<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests\Enums\EnumUtils;

use Ilyes512\EnumUtils\EnumUtils;

enum Colors
{
    use EnumUtils;

    case RED;
    case GREEN;
    case BLUE;
}
