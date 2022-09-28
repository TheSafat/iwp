<?php
    $conn = mysqli_connect('localhost', 'root', '', 'problem11db') or die("Database Error");

    if(isset($_POST['btn']))
    {
        $name = $_POST['name'];
        $made_in = $_POST['made_in'];
        $catagory = $_POST['catagory'];
        $price = $_POST['price'];
        $img_name = $_FILES["img"]['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        //if(isset($_FILES['img'])) print_r($_FILES['img']);
    }

    $sql = "INSERT INTO electronics (name, made_in, catagory, price, img) values
            ('$name', '$made_in', '$catagory', $price, '$img_name')";

    mysqli_query($conn, $sql);

    move_uploaded_file($tmp_name, "upload/" . $img_name);

    echo "data has successfully inserted";

    mysqli_close($conn);
?>