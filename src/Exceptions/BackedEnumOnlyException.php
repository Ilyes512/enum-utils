<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Exceptions;

use RuntimeException;

class BackedEnumOnlyException extends RuntimeException implements EnumUtilsException
{
    public static function create(): self
    {
        return new self('This method is only available for backed enums.');
    }
}
