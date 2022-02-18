<?php
  require_once "../classes/product.php";

  $product = new Product;

  $product->deleteProduct($_GET['product_id']);

?>