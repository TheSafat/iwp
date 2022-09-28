<?php
    $conn = mysqli_connect('localhost', 'root', '', 'problem2db');

    if(isset($_POST['btn'])){
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];

        $product_img = $_FILES['product_img']['name'];
        $tmp_name = $_FILES['product_img']['tmp_name'];

         $sql = "INSERT INTO product (product_name, product_price, product_img) 
                 VALUES
                 ('$product_name', $product_price, '$product_img')";
        
        if(mysqli_query($conn, $sql)){
            move_uploaded_file($tmp_name, 'upload/' . $product_img);
            echo 'Successfully data inserted.';
        }

    }
?>