<?php


namespace Training\Shopping;


use Money\Money;

class PhysicalProduct implements Product
{
    private $name;
    private $retailPrice;

    public function __construct(string $name, Money $retailPrice)
    {
        $this->name = $name;
        $this->retailPrice = $retailPrice;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Money
     */
    public function getRetailPrice(): Money
    {
        return $this->retailPrice;
    }
}