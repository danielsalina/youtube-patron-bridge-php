<?php

// index.php
require_once 'vendor/autoload.php';

use Abstractions\DigitalProduct;
use Abstractions\PhysicalProduct;
use Implementations\CreditCardPayment;
use Implementations\PayPalPayment;
use Bridge\EcommerceBridge;

// Instancia del Bridge
$bridge = new EcommerceBridge();

// Comprar producto digital con tarjeta de crédito
$digitalProduct = new DigitalProduct(10.99, new CreditCardPayment());
$bridge->processOrder($digitalProduct);

echo "\n";

// Comprar producto físico con PayPal
$physicalProduct = new PhysicalProduct(49.99, new PayPalPayment());
$bridge->processOrder($physicalProduct);