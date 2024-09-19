<?php

// src/implementations/PaymentMethod.php
namespace Implementations;

interface PaymentMethod {
    public function pay(float $amount);
}
