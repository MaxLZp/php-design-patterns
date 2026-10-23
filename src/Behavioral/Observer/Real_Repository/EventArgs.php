<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Real_Repository;

class EventArgs
{
    public function __construct(
        public string $event,
        public int $userId
    ) { }
}
