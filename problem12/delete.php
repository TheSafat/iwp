<?php
    $conn = mysqli_connect('localhost', 'root', '', 'problem12db');
    
    if(isset($_GET['status'])){
        if($_GET['status'] = 'delete'){
            $id = $_GET['id'];
        }
    }
    
    $sql = "DELETE FROM students WHERE id=$id";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
?>