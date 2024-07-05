<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Tests\Enums\EnumUtils;

use Ilyes512\EnumUtils\HasEnumUtils;

enum BackedColors: string
{
    use HasEnumUtils;

    case RED = 'red';
    case GREEN = 'green';
    case BLUE = 'blue';
}
