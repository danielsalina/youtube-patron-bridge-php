<?php

// src/Bridge/EcommerceBridge.php
namespace Bridge;

use Abstractions\Product;

class EcommerceBridge {
    public function processOrder(Product $product) {
        $product->buy();
    }
}
