<?php
  require 'database.php';
//what deference between require and require_once
class Product extends Database{
    public function createProduct($product_name,$product_price){
        $sql = "INSERT INTO products(product_name, product_price)VALUE('$product_name','$product_price')";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error in creating the product." .$this->conn->error);

        }
    }
    public function updateProduct($product_id,$product_name,$product_price){
        $sql = "UPDATE products SET product_name = '$product_name', product_price = '$product_price' WHERE product_id ='$product_id'";
        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error in updating product." .$this->conn->error);

        }
    }   
    public function deleteProduct($product_id){
        $sql = "DELETE FROM products WHERE product_id ='$product_id'";
        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error in deleting product." .$this->conn->error);

        }
    }
    public function getSpecificProduct($product_id){
        $sql = "SELECT * FROM products WHERE product_id ='$product_id'";
        if($result = $this->conn->query($sql)){
           return $result->fetch_assoc();
        }else{
            die("Error in retrieving product details." .$this->conn->error);

        }
    }
    public function getProducts(){
        $sql = "SELECT product_id, product_name, product_price FROM products";
        if( $result = $this->conn->query($sql)){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
                //I cant get it.
            }
            return $rows;
        }else{
            die("Error in retrieving products." .$this->conn->error);

        }
    }
}

?>