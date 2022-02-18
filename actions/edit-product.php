<?php
  require_once "../classes/product.php";

  $product_id = $_POST['product_id'];
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];

  $product = new Product;
  $product->updateProduct($product_id,$product_name,$product_price)

?>