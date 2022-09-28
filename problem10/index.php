<?php
    session_start();
    $conn = new mysqli('localhost', 'root', '', 'problem10db') or die;
    
    $sql = "SELECT * FROM Admin";
    $res = $conn->query($sql);
    while($row = $res->fetch_assoc())
    {
        if($row['user']==$_POST['usr'] && $row['pass']==$_POST['pass'])
        {
            $_SESSION['msg'] = 'logged';
            break;
        }
    }
    
    if(isset($_SESSION['msg']))
    {
        echo "Login Successful";
    }
    else
    {
        echo "Invalid username or password";
    }
?>
