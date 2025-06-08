<?php

require './src/bootstrap.php';

use MaxLZp\DesignPatterns\Behavioral\Strategy\Abstract\Context;
use MaxLZp\DesignPatterns\Behavioral\Strategy\Abstract\WriteAStrategy;
use MaxLZp\DesignPatterns\Behavioral\Strategy\Abstract\WriteBStrategy;

$context = new Context(new WriteAStrategy());
$context->write('Amessage');

$context->setStrategy(new WriteBStrategy());
$context->write('Amessage');