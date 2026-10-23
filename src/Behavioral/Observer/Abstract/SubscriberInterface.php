<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Abstract;

interface SubscriberInterface
{
    public function update(PublisherInterface $publisher);
}
