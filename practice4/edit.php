<?php
    if(isset($_GET['status'])){
        if($_GET['status'] = 'edit'){
            $id = $_GET['id'];
        }
    }

    $conn = mysqli_connect('localhost', 'root', '', 'practice4db');
    $sql = "SELECT * FROM student WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr> <td>ID</td><td> <?php echo $row['id'] ?> </td> </tr>
            <tr> <td>Name</td><td> <input type="text" name="new_name" id="" value = "<?php echo $row['name'] ?>" > </td> </tr>
            <tr> <td>Email</td><td> <input type="text" name="new_email" id="" value = "<?php echo $row['email'] ?>" > </td> </tr>
            <tr> <td>Image</td><td> <input type="file" name="new_img" id="" value = "<?php echo $row['name'] ?>" > <img src="upload/<?php echo $row['name'] ?>" alt=""> </td> </tr>
            <tr><td></td><td><input type="submit" name="btn">Submit</td></tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['btn'])){
        extract($_POST);
        $new_img_name = $_POST[''];

        $sql = "UPDATE student 
                SET name='$new_name',
                    email='$new_email',
                    image=''
        "
    }
?>