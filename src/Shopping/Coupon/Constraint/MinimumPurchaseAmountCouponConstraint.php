<?php


namespace Training\Shopping\Coupon\Constraint;


use Training\Shopping\Coupon\Coupon;
use Training\Shopping\Coupon\IneligibleCouponException;
use Training\Shopping\Coupon\Money;

class MinimumPurchaseAmountCouponConstraint extends CouponConstraint
{
    private $minimumAmount;

    public function __construct(Coupon $coupon, Money $minimumAmount)
    {
        parent::__construct($coupon);

        $this->minimumAmount = $minimumAmount;
    }

    public function applyOn(Money $totalAmount): Money
    {
        if ($totalAmount->lessThan($this->minimumAmount)) {
            throw new IneligibleCouponException('Mimimum amount required!', $this->coupon);
        }

        return $this->coupon->applyOn($totalAmount);
    }
}