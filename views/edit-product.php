<?php
session_start();

require_once "../classes/product.php";

$product = new Product;
$product_details = $product->getSpecificProduct($_GET['product_id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Edit Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="dashboard.php" class="navbar-brand">
            <h3>salesOOP</h3>
        </a>
       
    </nav>

    <div class="container">
        <div class="card w-50 mx-auto">
            <div class="card-header">
                <div class="display-6">Edit product</div>
            </div>
            <div class="card-body">
               <form action="../actions/edit-product.php" method="post" >
                   <input type="hidden" name="product_id" value="<?=$_GET['product_id']?>">
                   <!-- I cant get it. -->
                   <label for="name">Name</label>
                   <input type="text" class="form-control" name="product_name" id="name" value="<?=$product_details['product_name']?>">
                   <label for="price">Price</label>
                   <input type="text" class="form-control" name="product_price" id="price" value="<?=$product_details['product_price']?>">
                   <div class="d-grid">
                       <button type="submit" class="btn btn-info">Update</button>
                   </div>
               </form>
            </div>
        </div>
    </div>