<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Abstract;

class B implements VisitableInterface
{
    public string $value = 'BValue';

    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitB($this);
    }
}
