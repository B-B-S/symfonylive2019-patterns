<?php


namespace Training\Shopping\Coupon;


interface Coupon
{
    public function getCode(): string;

    public function applyOn(Money $totalAmount): Money;
}