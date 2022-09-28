<?php

    $conn = mysqli_connect('localhost', 'root', '', 'practice4db');

    if(isset($_POST['btn'])){
        extract($_POST);
        $img_name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
    }

    $sql = "INSERT INTO student (name, password, email, image) VALUES ('$name', '$password', '$email', '$img_name')";

    if(mysqli_query($conn, $sql)){
        move_uploaded_file($tmp_name, 'upload/' . $img_name);
        echo "Data Submitted Successfully.";
        header('Location: login.php');
    }

    mysqli_close($conn);
?>