<?php

// src/abstractions/Product.php
namespace Abstractions;

use Implementations\PaymentMethod;

abstract class Product {
    protected $price;
    protected $paymentMethod;

    public function __construct(float $price, PaymentMethod $paymentMethod) {
        $this->price = $price;
        $this->paymentMethod = $paymentMethod;
    }

    abstract public function buy();
}
