<?php
    if(isset($_GET['status'])){
        if($_GET['status'] = 'delete'){
            $id = $_GET['id'];
        }
    }

    $conn = mysqli_connect('localhost', 'root', '', 'problem15db');
    $sql = "DELETE FROM students WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    
    mysqli_close($conn);
?>