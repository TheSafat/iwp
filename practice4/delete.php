<?php
    if(isset($_GET['status'])){
        if($_GET['status'] = 'delete'){
            $id = $_GET['id'];
        }
    }

    $conn = mysqli_connect('localhost', 'root', '', 'practice4db');
    $sql = "DELETE FROM student WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    
    mysqli_close($conn);
?>