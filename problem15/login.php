<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Username </td> <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password </td> <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td></td> <td><input type="submit" name="btn" id="" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>


<!-- --------------------------------------------- PHP ----------------------------------------- -->

<?php
    $conn = mysqli_connect("localhost", "root", "", "problem15db");
    if(isset($_POST['btn'])){
        extract($_POST);

        $sql = "SELECT * FROM students where username='$username' && password='$password'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $row['name'];
            $_SESSION['role'] = $row['role'];
            // header('location: welcome.php');
        } else {
            echo "error at login";
        }

        if($_SESSION['role']=='user'){
            header('location: welcome.php');
        } else if ($_SESSION['role']=='admin') {
            header('location: show.php');
        }
    }
?>