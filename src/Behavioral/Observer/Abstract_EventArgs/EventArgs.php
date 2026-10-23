<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Behavioral\Observer\Abstract_EventArgs;

class EventArgs
{
    public function __construct(
        public string $str
    ) {
    }

}
