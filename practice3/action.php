<?php

$conn = mysqli_connect("localhost", "root", "", "table");

if(isset($_GET['btn'])){
    $name = $_GET['name'];
    $pass = $_GET['password'];

    echo "name = $name";
}

?>