<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting;

interface Entity
{
    public function accept(Visitor $visit): void;
}
