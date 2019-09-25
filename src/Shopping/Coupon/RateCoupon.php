<?php


namespace Training\Shopping\Coupon;


use Assert\Assert;

class RateCoupon extends AbstractCoupon
{
    private $rate;

    public function __construct(string $code, float $rate)
    {
        Assert::between($rate, 0, 1);

        parent::__construct($code);

        $this->rate = $rate;
    }

    public static function fromPercentage(string $code, float $percentage): self
    {
        Assertion::between($percentage, 0, 100);

        return new self($code, $percentage / 100);
    }

    public function applyOn(Money $totalAmount): Money
    {
        return $totalAmount->multiply($this->rate);
    }
}