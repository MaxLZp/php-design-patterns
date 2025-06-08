<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Behavioral\Strategy\Real_OrderPayment;

class PaymentMethodFactory
{
    public static function paypal(): PaymentMethodInterface
    {
        return new PaymentMethodPaypal();
    }

    public static function stripe(): PaymentMethodInterface
    {
        return new PaymentMethodStripe();
    }
}
