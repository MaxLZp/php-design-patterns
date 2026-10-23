<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Abstract_EventArgs;

interface SubscriberInterface
{
    public function update(EventArgs $eventArgs);
}
