<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Tests\Behavioral\Visitor\Abstract;
use PHPUnit\Framework\TestCase;
use MaxLZp\DesignPatterns\Behavioral\Visitor\Abstract\A;
use MaxLZp\DesignPatterns\Behavioral\Visitor\Abstract\B;
use MaxLZp\DesignPatterns\Behavioral\Visitor\Abstract\VisitorOne;

class VisitorTest extends TestCase
{
    public function testVisitorOne()
    {
        $visitor = new VisitorOne();
        $elements = [
            new A(),
            new B(),
        ];

        foreach ($elements as $element) {
            $before = $element->value;
            $element->accept($visitor);
            $this->assertEquals(
                sprintf('%1$s updated by %2$s from %3$s', get_class($element), get_class($visitor), $before),
                $element->value,
            );
        }
    }

}
