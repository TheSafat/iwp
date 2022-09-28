<?php
    $conn = mysqli_connect("localhost", "root", "", "problem5db");
    
    if(isset($_GET['btn']))
    {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $salary = $_GET['salary'];
    }

    $sql = "INSERT INTO employee (name, email, salary) values ('$name', '$email', '$salary')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>