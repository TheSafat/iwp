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
        <input type="file" name="img" id="">
        <input type="submit" name="btn">
    </form>




<?php
    if(isset($_POST['btn'])){
        //print_r($_FILES['img']);
        $img_name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];

        move_uploaded_file($tmp_name, "upload/" . $img_name);
    }

    
    echo "<img src='upload/'.$img_name >";

?>



</body>
</html>