<?php

// src/abstractions/PhysicalProduct.php
namespace Abstractions;

class PhysicalProduct extends Product {
    public function buy() {
        echo "Comprando un producto físico por $" . $this->price . ".\n";
        $this->paymentMethod->pay($this->price);
    }
}
