<?php
    $conn = mysqli_connect("localhost", "root", "", "practice4db");
    if(isset($_POST['btn'])){
        extract($_POST);

        $sql = "SELECT * FROM student WHERE email='$email' && password='$password' ";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1) {
            echo "Log in successful";
            header('location: welcome.html');
        } else {
            echo "you have entered wrong password";
        }
        exit();
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="#" method="post">
        Email :<input type="text" name="email" id=""> <br>
        Password :<input type="text" name="password"> <br>
        <input type="submit" name="btn" value="login">
    </form>
</body>
</html>