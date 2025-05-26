<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting;

class Company implements Entity
{
    /**
     * @param string $title
     * @param Department[] $departments
     */
    public function __construct(
        public string $title,
        public array $departments,
    ) {
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitCompany($this);
    }
}
