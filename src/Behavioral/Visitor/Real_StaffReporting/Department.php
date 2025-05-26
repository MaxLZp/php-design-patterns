<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting;

class Department implements Entity
{
    /**
     * @param string $title
     * @param Employee[] $employees
     */
    public function __construct(
        public string $title,
        public array $employees,
    ) {
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitDepartment($this);
    }
}
