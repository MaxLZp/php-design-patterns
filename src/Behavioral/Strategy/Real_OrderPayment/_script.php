<?php

require './src/bootstrap.php';

use MaxLZp\DesignPatterns\Behavioral\Strategy\Real_OrderPayment\Order;
use MaxLZp\DesignPatterns\Behavioral\Strategy\Real_OrderPayment\PaymentProcessor;
use MaxLZp\DesignPatterns\Behavioral\Strategy\Real_OrderPayment\PaymentMethodFactory;

$order = new Order('#123', 123);

$paymentProcessor = new PaymentProcessor();

$paymentProcessor->setMethod(PaymentMethodFactory::paypal());
$paymentProcessor->showForm($order);
$paymentProcessor->handleResponse();


$paymentProcessor->setMethod(PaymentMethodFactory::stripe());
$paymentProcessor->showForm($order);
$paymentProcessor->handleResponse();
