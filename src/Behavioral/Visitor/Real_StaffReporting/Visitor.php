<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting;

interface Visitor
{
    public function visitEmployee(Employee $employee): void;
    public function visitDepartment(Department $department): void;
    public function visitCompany(Company $company): void;
}
