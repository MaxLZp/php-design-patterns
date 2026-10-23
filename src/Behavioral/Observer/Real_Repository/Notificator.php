<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Real_Repository;

use SplObserver;
use SplSubject;

class Notificator implements SplObserver, EventArgsObserverInterface
{
    public function update(SplSubject $subject, ?EventArgs $eventArgs = null): void
    {
        echo sprintf('Notification of event: %d; user: %d', $eventArgs->event, $eventArgs->userId).PHP_EOL;
    }
}
