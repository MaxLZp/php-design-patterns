<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Behavioral\Strategy\Real_OrderPayment;

class PaymentProcessor
{
    private PaymentMethodInterface $paymentMethod;

    public function setMethod(PaymentMethodInterface $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function showForm(Order $order): void
    {
        echo PHP_EOL.'>>> Processing payment'.PHP_EOL;
        $this->paymentMethod->showForm($order);
    }
    
    public function handleResponse(): void
    {
        echo PHP_EOL.'>>> Processing payment system response'.PHP_EOL;
        $this->paymentMethod->handleResponse();
    }
}
