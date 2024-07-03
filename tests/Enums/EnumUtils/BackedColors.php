<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests\Enums\EnumUtils;

use Ilyes512\EnumUtils\EnumUtils;

enum BackedColors: string
{
    use EnumUtils;

    case RED = 'red';
    case GREEN = 'green';
    case BLUE = 'blue';
}
