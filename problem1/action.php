<?php

    $conn = mysqli_connect('localhost', 'root', '', 'problem1db');
    
    if(isset($_GET['btn'])){
        extract($_GET);
        $shift = implode("," , $shift);
    }

    $sql = "INSERT INTO student (fname, lname, email, dateOfBirth, phone, gender, dept, shift) 
            values 
            ('$fname', '$lname', '$email', '$dateOfBirth', '$phone', '$gender', '$dept', '$shift')";

    if(mysqli_query($conn, $sql))
    {
        echo 'Successfully data inserted.';
    }
    else
    {
        echo 'Failure. ' . mysqli_error($conn);
    }

    mysqli_close($conn);
?>