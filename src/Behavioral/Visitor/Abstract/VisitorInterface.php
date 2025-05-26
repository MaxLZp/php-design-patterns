<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Abstract;

interface VisitorInterface
{
    public function visitA(A $element): void;
    public function visitB(B $element): void;
}
