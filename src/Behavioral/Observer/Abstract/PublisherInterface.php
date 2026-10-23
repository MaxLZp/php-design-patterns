<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Abstract;

interface PublisherInterface
{
    public function addSubscriber(SubscriberInterface $subscriber);
    public function removeSubscriber(SubscriberInterface $subscriber);
    public function publish();
}
