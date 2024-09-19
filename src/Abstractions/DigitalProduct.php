<?php

// src/abstractions/DigitalProduct.php
namespace Abstractions;

class DigitalProduct extends Product {
    public function buy() {
        echo "Comprando un producto digital por $" . $this->price . ".\n";
        $this->paymentMethod->pay($this->price);
    }
}
