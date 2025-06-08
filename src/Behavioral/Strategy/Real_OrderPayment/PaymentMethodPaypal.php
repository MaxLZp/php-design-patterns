<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Behavioral\Strategy\Real_OrderPayment;

class PaymentMethodPaypal implements PaymentMethodInterface
{
    public function showForm(Order $order): void
    {
        echo sprintf('Redirecting to PayPal Form to pay %1$.2f for order %2$s'.PHP_EOL, $order->total / 100, $order->number);
    }

    public function handleResponse(): void
    {
        echo 'Handling PayPal response'.PHP_EOL;
    }
}
