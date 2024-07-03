<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils;

use Ilyes512\EnumUtils\Exceptions\InvalidArgumentException;
use Webmozart\Assert\Assert as WebmozartAssert;

class Assert extends WebmozartAssert
{
    /**
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @psalm-pure this method is not supposed to perform side-effects
     * @psalm-return never
     */
    protected static function reportInvalidArgument($message)
    {
        throw new InvalidArgumentException($message);
    }
}
