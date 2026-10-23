<?php

require './src/bootstrap.php';

use MaxLZp\DesignPatterns\Behavioral\Observer\Real_Repository\Logger;
use MaxLZp\DesignPatterns\Behavioral\Observer\Real_Repository\LoggerSimple;
use MaxLZp\DesignPatterns\Behavioral\Observer\Real_Repository\Notificator;
use MaxLZp\DesignPatterns\Behavioral\Observer\Real_Repository\Repository;


$repository = new Repository();
$repository->attach(new Logger());
$repository->attach(new LoggerSimple());
$repository->attach(new Notificator());

$repository->init();
$repository->merge();
