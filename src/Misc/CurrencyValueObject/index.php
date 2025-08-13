<?php

require './src/bootstrap.php';

use MaxLZp\DesignPatterns\Misc\CurrencyValueObject\Currency;

$usd = Currency::getByCode('usd');
echo $usd->getCode();

$eur = Currency::EUR();
echo PHP_EOL.$eur->getCode();

try {
    $eur = Currency::UAH();
} catch (\Throwable $th) {
    echo PHP_EOL.$th->getMessage();
}