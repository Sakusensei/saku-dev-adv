<?php
   require "../classes/product.php";

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];

   $product = new Product;
   $product->createProduct($product_name,$product_price)
?>