<?php


namespace Training\Shopping\Coupon;


use Training\Shopping\Coupon\CodeGenerator\CouponCodeGenerator;

abstract class AbstractCouponFactory implements CouponFactory
{
    protected $codeGenerator;

    public function __construct(CouponCodeGenerator $codeGenerator)
    {
        $this->codeGenerator = $codeGenerator;
    }

    final public function createCoupon(array $context = []): Coupon
    {
        $code = $context['code'] ?? $this->codeGenerator->generate();

        return $this->issueCoupon($code, $context);
    }

    abstract protected function issueCoupon(string $code, array $context): Coupon;
}