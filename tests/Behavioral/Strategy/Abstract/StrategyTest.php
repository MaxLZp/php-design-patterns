<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Tests\Behavioral\Strategy\Abstract;

use MaxLZp\DesignPatterns\Behavioral\Strategy\Abstract\Context;
use MaxLZp\DesignPatterns\Behavioral\Strategy\Abstract\WriteAStrategy;
use MaxLZp\DesignPatterns\Behavioral\Strategy\Abstract\WriteBStrategy;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testAmessage(): void
    {
        $this->expectOutputString("There goes an A-message:Amessage\n");
        
        $context = new Context(new WriteAStrategy());
        $context->write('Amessage');
    }

    public function testBmessage(): void
    {
        $this->expectOutputString("There goes a B-message:Amessage\n");

        $context = new Context(new WriteBStrategy());
        $context->write('Amessage');
    }
}
