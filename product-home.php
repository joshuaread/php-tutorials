<?php

require_once 'product.php';

$food = new Product();
$food->setProductType('Food');
echo 'This item is: ' . $food->getProductType();
	
?>