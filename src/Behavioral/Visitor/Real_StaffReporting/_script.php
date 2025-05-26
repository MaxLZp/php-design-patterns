<?php

require './src/bootstrap.php';

use MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting\Company;
use MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting\Employee;
use MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting\Department;
use MaxLZp\DesignPatterns\Behavioral\Visitor\Real_StaffReporting\EmployeesReport;


$john = new Employee('John', 'CEO');
$bill = new Employee('Bill', 'CTO');
$jane = new Employee('Jane', 'Front-end');
$steve = new Employee('Steve', 'SEO');
$mark = new Employee('Mark', 'Back-end');

$departments = [
    new Department('Management', [$john, $bill]),
    new Department('Production', [$jane, $steve, $mark]),
];
$company = new Company('The company', $departments);

$visitor = new EmployeesReport();

$john->accept($visitor);
echo '+++++++++++++++++++++++'.PHP_EOL;
echo '>>>>> Visit employee'.PHP_EOL;
echo $visitor->report;
echo PHP_EOL;

$departments[0]->accept($visitor);
echo '+++++++++++++++++++++++'.PHP_EOL;
echo '>>>>> Visit department'.PHP_EOL;
echo $visitor->report;
echo PHP_EOL;

$company->accept($visitor);
echo '+++++++++++++++++++++++'.PHP_EOL;
echo '>>>>> Visit Company'.PHP_EOL;
echo $visitor->report;
echo PHP_EOL;
