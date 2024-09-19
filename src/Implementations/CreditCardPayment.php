<?php

// src/implementations/CreditCardPayment.php
namespace Implementations;

class CreditCardPayment implements PaymentMethod {
    public function pay(float $amount) {
        echo "Pagando $" . $amount . " con tarjeta de crédito.\n";
    }
}
