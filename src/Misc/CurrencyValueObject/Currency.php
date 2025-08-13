<?php

declare(strict_types=1);

namespace MaxLZp\DesignPatterns\Misc\CurrencyValueObject;

final class Currency
{
    private static ?Currency $EUR = null;
    private static ?Currency $USD = null;

    private function __construct(private string $code)
    {
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public static function __callStatic(string $name,array $args): mixed
    {
        return static::getByCode($name);
    }

    public static function getByCode(string $code): self
    {
        $filtered = array_filter(static::all(), function($currency) use ($code) {
            return strcasecmp($currency->getCode(), $code) == 0;
         });

        return $filtered ? array_shift($filtered) : throw new \InvalidArgumentException('Unknown currency: '.$code);
    }

    public static function all(): array
    {
        return [
            static::$EUR,
            static::$USD,
        ];
    }

    public static function init() {
        static::$EUR = new Currency('EUR');
        static::$USD = new Currency('USD');
    }
}

Currency::init();