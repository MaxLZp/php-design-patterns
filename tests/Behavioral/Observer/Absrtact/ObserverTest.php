<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Tests\Behavioral\Observer\Abstract;


use MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Publisher;
use MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber1;
use MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber2;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testSingleSubscriber(): void
    {
        $this->expectOutputString(
            "MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber1::update\n"
            ."State: 1\n"
        );
        
        $publisher = new Publisher();

        $subscriber1 = new Subscriber1();

        $publisher->addSubscriber($subscriber1);

        $publisher->businessLogic();
    }

    public function testTwoSubscribers(): void
    {
        $this->expectOutputString(
            "MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber1::update\n"
            ."State: 1\n"
            ."MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber2::update\n"
            ."State: 1\n"
        );
        
        $publisher = new Publisher();

        $subscriber1 = new Subscriber1();
        $subscriber2 = new Subscriber2();

        $publisher->addSubscriber($subscriber1);
        $publisher->addSubscriber($subscriber2);

        $publisher->businessLogic();
    }

    public function testRemovingSubscriber(): void
    {
        $this->expectOutputString(
            "MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber1::update\n"
            ."State: 1\n"
        );
        
        $publisher = new Publisher();

        $subscriber1 = new Subscriber1();
        $subscriber2 = new Subscriber2();

        $publisher->addSubscriber($subscriber1);
        $publisher->addSubscriber($subscriber2);

        $publisher->removeSubscriber($subscriber2);

        $publisher->businessLogic();
    }


    public function testTwoLogics(): void
    {
        $this->expectOutputString(
            "MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber1::update\n"
            ."State: 1\n"
            ."MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber2::update\n"
            ."State: 1\n"
            ."MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber1::update\n"
            ."State: 2\n"
            ."MaxLZp\DesignPatterns\Behavioral\Observer\Abstract\Subscriber2::update\n"
            ."State: 2\n"
        );
        
        $publisher = new Publisher();

        $subscriber1 = new Subscriber1();
        $subscriber2 = new Subscriber2();

        $publisher->addSubscriber($subscriber1);
        $publisher->addSubscriber($subscriber2);

        $publisher->businessLogic();
        $publisher->businessLogic();
    }

}
