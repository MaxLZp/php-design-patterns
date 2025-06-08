<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Behavioral\Strategy\Real_OrderPayment;

interface PaymentMethodInterface
{
    public function showForm(Order $order): void;
    public function handleResponse(): void;
}
