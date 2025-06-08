<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Behavioral\Strategy\Abstract;

interface WriteStrategyInterface
{
    public function write(string $message): void;
}
