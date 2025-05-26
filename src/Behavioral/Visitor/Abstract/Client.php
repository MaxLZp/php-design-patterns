<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Visitor\Abstract;

class Client
{
    public static function runDemo(): void
    {
        $visitors = [
            new VisitorOne(),
            new VisitorTwo(),
        ];

        foreach ($visitors as $visitor) {
            self::run($visitor);
        }
    }

    private static function run(VisitorInterface $visitor): void
    {
        $elements = [
            new A(),
            new B(),
        ];

        foreach ($elements as $element) {
            $before = $element->value;
            $element->accept($visitor);
            echo sprintf('before: %1$s; after: %2$s', $before, $element->value).PHP_EOL;
        }
    }
}
