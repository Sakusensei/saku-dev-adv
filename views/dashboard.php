<?php
session_start();

require_once "../classes/product.php";
$product = new Product;
$product_list = $product->getProducts();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="dashboard.php" class="navbar-brand">
            <h3>Products</h3>
        </a>
    </nav>
    <div class="container mt-5">
        <table class="table table-hover">
            <thead class="table-secondary">
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                foreach($product_list as $product){
                ?>
                <tr>
                    <td><?= $product['product_id']?></td>
                    <td><?= $product['product_name']?></td>
                    <td><?= $product['product_price']?></td>

                    <td>
                        <a href="edit-product.php?product_id=<?= $product['product_id']?>" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                        <a href="../actions/delete-product.php?product_id=<?= $product['product_id']?>" class="btn btn-success"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>