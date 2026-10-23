<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Abstract;

use SplObjectStorage;

class AbstractPublisher implements PublisherInterface
{
    public function __construct(
        private $subscribers = new SplObjectStorage()
    ) {
    }

    public function addSubscriber(SubscriberInterface $subscriber)
    {
        $this->subscribers->offsetSet($subscriber);
    }

    public function removeSubscriber(SubscriberInterface $subscriber)
    {
        $this->subscribers->offsetUnset($subscriber);
    }

    public function publish()
    {
        /** @var SubscriberInterface $subscriber */
        foreach($this->subscribers as $subscriber) {
            $subscriber->update($this);
        }
    }

}
