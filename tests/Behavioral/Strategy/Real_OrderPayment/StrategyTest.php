<?php

declare(strict_types = 1);

namespace MaxLZp\DesignPatterns\Tests\Behavioral\Strategy\Real_OrderPayment;

use MaxLZp\DesignPatterns\Behavioral\Strategy\Real_OrderPayment\Order;
use MaxLZp\DesignPatterns\Behavioral\Strategy\Real_OrderPayment\PaymentProcessor;
use MaxLZp\DesignPatterns\Behavioral\Strategy\Real_OrderPayment\PaymentMethodFactory;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testPayPalStrategyShowForm(): void
    {
        $this->expectOutputString("\n>>> Processing payment\nRedirecting to PayPal Form to pay 1.23 for order #123\n");
        $order = new Order('#123', 123);

        $paymentProcessor = new PaymentProcessor();
        
        $paymentProcessor->setMethod(PaymentMethodFactory::paypal());
        $paymentProcessor->showForm($order);
    }

    public function testPayPalStrategyHandleResponse(): void
    {
        $this->expectOutputString("\n>>> Processing payment system response\nHandling PayPal response\n");
        $order = new Order('#123', 123);

        $paymentProcessor = new PaymentProcessor();
        
        $paymentProcessor->setMethod(PaymentMethodFactory::paypal());
        $paymentProcessor->handleResponse();
    }
 
    public function testStripeStrategyShowForm(): void
    {
        $this->expectOutputString("\n>>> Processing payment\nRedirecting to Stripe Form to pay 1.23 for order #123\n");
        $order = new Order('#123', 123);

        $paymentProcessor = new PaymentProcessor();
        
        $paymentProcessor->setMethod(PaymentMethodFactory::stripe());
        $paymentProcessor->showForm($order);
    }

    public function testStripeStrategyHandleResponse(): void
    {
        $this->expectOutputString("\n>>> Processing payment system response\nHandling Stripe response\n");
        $order = new Order('#123', 123);

        $paymentProcessor = new PaymentProcessor();
        
        $paymentProcessor->setMethod(PaymentMethodFactory::stripe());
        $paymentProcessor->handleResponse();
    }
}
