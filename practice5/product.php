<?php
    $conn = mysqli_connect("localhost", "root", "", "problem2db");
    if(isset($_POST['btn'])){
        extract($_POST);
        $product_name = $_FILES['product_img']['name'];
        $tmp_name = $_FILES['product_img']['tmp_name'];
    }

    $sql = "INSERT INTO student (name, password, email, image) VALUES ('$name', '$password', '$email', '$img_name')";

    if(mysqli_query($conn, $sql)){
        move_uploaded_file($tmp_name, 'upload/' . $img_name);
        echo "successful";
        //header('location: product.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        name: <input type="text" name="name" id="">
        image: <input type="file" name="product_img" id="">
        <input type="submit" name="btn" id="" value="Submit">
    </form>
</body>
</html>