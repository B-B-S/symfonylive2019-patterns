<?php


namespace Training\Shopping\Coupon;


abstract class AbstractCoupon implements Coupon
{
    private $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function getCode(): string
    {
        return $this->code;
    }
}