<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Abstract;

class Subscriber1 implements SubscriberInterface
{
    public function update(PublisherInterface $publisher)
    {
        echo __METHOD__.PHP_EOL;
        echo sprintf('State: %d', $publisher->getState()).PHP_EOL;
    }
}
