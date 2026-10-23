<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Real_Repository;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Repository implements SplSubject
{
    public function __construct(
        private SplObjectStorage $observers = new SplObjectStorage()
    ) { }

    public function attach(SplObserver $observer): void
    {
        $this->observers->offsetSet($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->offsetUnset($observer);
    }

    public function notify(?EventArgs $eventArgs = null): void
    {
        foreach($this->observers as $observer) {
            if ($observer instanceof EventArgsObserverInterface) {
                $observer->update($this, $eventArgs ?? new EventArgs('generic', 0));
            } else {
                $observer->update($this);
            }
        }
    }

    public function init(): void
    {
        $this->notify(new EventArgs('init', 1));
    }

    public function merge(): void
    {
        $this->notify(new EventArgs('merge', 1));
    }

}
