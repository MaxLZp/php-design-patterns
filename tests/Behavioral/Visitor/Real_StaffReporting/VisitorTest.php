<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Tests\Behavioral\Visitor\Real_StaffReporting;

use PHPUnit\Framework\TestCase;
use MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting\Company;
use MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting\Employee;
use MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting\Department;
use MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting\EmployeesReport;

class VisitorTest extends TestCase
{
    public function testEmployeeVisit(): void
    {
        $visitor = new EmployeesReport();

        $employee = new Employee('Name', 'position');

        $employee->accept($visitor);

        $this->assertEquals(sprintf('%1$s [%2$s]', $employee->name, $employee->position).PHP_EOL, $visitor->report);
    }

    public function testDepartmentVisit(): void
    {
        $visitor = new EmployeesReport();

        $employee1 = new Employee('Name1', 'position1');
        $employee2 = new Employee('Name2', 'position2');
        $department = new Department('Department', [$employee1, $employee2]);

        $expected = sprintf('%1$s', $department->title).PHP_EOL;
        foreach ($department->employees as $employee) {
            $expected .= sprintf('- %1$s [%2$s]', $employee->name, $employee->position).PHP_EOL;
        }

        $department->accept($visitor);

        $this->assertEquals($expected, $visitor->report);
    }

    public function testCompanyVisit(): void
    {
        $visitor = new EmployeesReport();

        $employee1 = new Employee('Name1', 'position1');
        $employee2 = new Employee('Name2', 'position2');
        $department1 = new Department('Department1', [$employee1, $employee2]);
        $department2 = new Department('Department2', [$employee1, $employee2]);
        $company = new Company('Company', [$department1, $department2]);

        $expected = sprintf('%1$s', strtoupper($company->title)).PHP_EOL;
        foreach ($company->departments as $department) {
            $expected .= PHP_EOL;
            $expected .= sprintf('%1$s', $department->title).PHP_EOL;
            foreach ($department->employees as $employee) {
                $expected .= sprintf('- %1$s [%2$s]', $employee->name, $employee->position).PHP_EOL;
            }
        }

        $company->accept($visitor);

        $this->assertEquals($expected, $visitor->report);
    }
}
