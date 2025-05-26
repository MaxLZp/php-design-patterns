<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Abstract;

class VisitorOne implements VisitorInterface
{
    public function visitA(A $element): void
    {
        $element->value = sprintf('%1$s updated by %2$s from %3$s', A::class, VisitorOne::class, $element->value);
    }

    public function visitB(B $element): void
    {
        $element->value = sprintf('%1$s updated by %2$s from %3$s', B::class, VisitorOne::class, $element->value);
    }
}
