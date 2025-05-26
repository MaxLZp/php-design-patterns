<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Abstract;

interface VisitableInterface
{
    public function accept(VisitorInterface $visitor): void;
}
