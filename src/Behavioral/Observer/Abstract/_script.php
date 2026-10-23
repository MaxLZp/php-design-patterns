<?php

require './src/bootstrap.php';

use MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Publisher;
use MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber1;
use MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber2;


$publisher = new Publisher();

$subscriber1 = new Subscriber1();
$subscriber2 = new Subscriber2();

$publisher->addSubscriber($subscriber1);
$publisher->addSubscriber($subscriber2);

$publisher->businessLogic();


echo 'Removing subscriber2'.PHP_EOL;
$publisher->removeSubscriber($subscriber2);
$publisher->businessLogic();
