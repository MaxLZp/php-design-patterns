<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Abstract;

class A implements VisitableInterface
{
    public string $value = 'AValue';

    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitA($this);
    }
}
