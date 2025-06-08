<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Behavioral\Strategy\Abstract;

class Context
{
    public function __construct(private WriteStrategyInterface $writeStrategy)
    { }

    public function setStrategy(WriteStrategyInterface $writeStrategy): void
    {
        $this->writeStrategy = $writeStrategy;
    }

    public function write(string $message): void
    {
        $this->writeStrategy?->write($message);
    }
}
