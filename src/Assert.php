<?php

declare(strict_types=1);

namespace Ilyes512\EnumUtils;

use Ilyes512\EnumUtils\Exceptions\InvalidArgumentException;
use Override;
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
    #[Override]
    protected static function reportInvalidArgument($message): never
    {
        throw new InvalidArgumentException($message);
    }
}
