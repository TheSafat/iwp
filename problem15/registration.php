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
                <td>Name</td> <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Username </td> <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password</td> <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td>Email </td> <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Contact No: </td> <td><input type="text" name="contact_no" id=""></td>
            </tr>
            <tr>
                <td></td> <td><input type="submit" name="btn" id=""></td>
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

        $sql = "INSERT INTO students (name, username, password, email, contact_no) values ('$name', '$username', '$password', '$email', '$contact_no')";

        mysqli_query($conn, $sql);
    }

?>