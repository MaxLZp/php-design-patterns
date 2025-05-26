<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting;

class EmployeesReport implements Visitor
{
    public string $report = '';

    public function visitEmployee(Employee $employee): void
    {
        $this->reset();
        $this->report .= sprintf('%1$s [%2$s]', $employee->name, $employee->position).PHP_EOL;
    }

    public function visitDepartment(Department $department): void
    {
        $this->reset();
        $this->report .= sprintf('%1$s', $department->title).PHP_EOL;
        foreach ($department->employees as $employee) {
            $this->report .= sprintf('- %1$s [%2$s]', $employee->name, $employee->position).PHP_EOL;
        }
    }

    public function visitCompany(Company $company): void
    {
        $this->reset();
        $this->report .= sprintf('%1$s', strtoupper($company->title)).PHP_EOL;
        foreach ($company->departments as $department) {
            $this->report .= PHP_EOL;
            $this->report .= sprintf('%1$s', $department->title).PHP_EOL;
            foreach ($department->employees as $employee) {
                $this->report .= sprintf('- %1$s [%2$s]', $employee->name, $employee->position).PHP_EOL;
            }
        }
    }

    private function reset(): void
    {
        $this->report = '';
    }
}
