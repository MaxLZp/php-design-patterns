<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Behavioral\Strategy\Abstract;

class WriteAStrategy implements WriteStrategyInterface
{
    public function write(string $message): void
    {
        echo 'There goes an A-message:'.$message.PHP_EOL;
    }
}
