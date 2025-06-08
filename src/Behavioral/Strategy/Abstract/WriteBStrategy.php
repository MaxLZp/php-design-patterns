<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Behavioral\Strategy\Abstract;

class WriteBStrategy implements WriteStrategyInterface
{
    public function write(string $message): void
    {
        echo 'There goes a B-message:'.$message.PHP_EOL;
    }
}
