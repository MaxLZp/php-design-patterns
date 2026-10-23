<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Abstract;

class Publisher extends AbstractPublisher
{
    private int $state = 0;

    public function businessLogic(): void
    {
        $this->state += 1;
        $this->publish();
    }

    public function getState(): int
    {
        return $this->state;
    }
}
