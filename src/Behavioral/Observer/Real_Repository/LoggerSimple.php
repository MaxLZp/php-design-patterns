<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Real_Repository;

use SplObserver;
use SplSubject;

class LoggerSimple implements SplObserver
{
    public function update(SplSubject $subject):void
    {
        echo sprintf('Logging Simple').PHP_EOL;
    }
}
