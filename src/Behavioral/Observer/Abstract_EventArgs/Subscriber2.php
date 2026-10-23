<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Abstract_EventArgs;

class Subscriber2 implements SubscriberInterface
{
    public function update(EventArgs $eventArgs)
    {
        echo __METHOD__.PHP_EOL;
        echo sprintf('Args.str: %s', $eventArgs->str).PHP_EOL;
        if ($eventArgs instanceof EventArgs_Child) {
            echo sprintf('Args.child: %d', $eventArgs->state).PHP_EOL;
        }
    }
}
