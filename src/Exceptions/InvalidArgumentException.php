<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils\Exceptions;

use Webmozart\Assert\InvalidArgumentException as WebmozartInvalidArgumentException;

class InvalidArgumentException extends WebmozartInvalidArgumentException implements EnumUtilsException
{
}
