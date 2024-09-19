<?php

// src/implementations/PayPalPayment.php
namespace Implementations;

class PayPalPayment implements PaymentMethod {
    public function pay(float $amount) {
        echo "Pagando $" . $amount . " con PayPal.\n";
    }
}
