<?php


namespace Training\Shopping\Coupon;


use Assert\Assertion;
use Money\Currency;
use Money\Money;

final class RateCouponFactory extends AbstractCouponFactory
{
    public function issueCoupon(string $code, array $context = []): Coupon
    {
        if(!empty($context['percentage'])) {
            $context['rate'] = $context['percentage'] / 100;
        }

        Assertion::keyExists($context, 'rate', 'The "rate" key is missing.');

        return new RateCoupon($code, $context['rate']);
    }

}