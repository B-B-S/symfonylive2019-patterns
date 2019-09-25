<?php


namespace Training\Shopping\Coupon\CodeGenerator;


use Assert\Assertion;

class FixedCouponCodeGenerator implements CouponCodeGenerator
{
    private $code;

    public function __construct(string $code)
    {
        Assertion::notEmpty($code);

        $this->code = $code;
    }

    public function generate(): string
    {
        return $this->code;
    }
}