<?php
    if(isset($_POST['btn'])){
        $img_name = $_FILES['img']['name'];
        $temp_name = $_FILES['img']['tmp_name'];
        //if(isset($_FILES['img'])) {print_r($_FILES["img"]);}
        print_r($_FILES["img"]);

        move_uploaded_file($temp_name, "upload/" . $img_name);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <!-- <img src="upload/<?php echo $img_name;?>" alt=""> -->
</body>
</html>