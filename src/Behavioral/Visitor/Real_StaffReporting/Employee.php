<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting;

class Employee implements Entity
{
    public function __construct(
        public string $name,
        public string $position,
    ) {
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitEmployee($this);
    }
}
