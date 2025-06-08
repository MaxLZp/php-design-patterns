<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Behavioral\Strategy\Real_OrderPayment;

class Order
{
    public function __construct(public string $number, public int $total)
    { }
}
