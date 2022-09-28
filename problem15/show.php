<?php
    $conn = mysqli_connect('localhost', 'root', '', 'problem15db');
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);

    if(!$_SESSION=='admin'){
        header('location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show</title>
</head>
<body>
    <table align=center border=1>
        <tr>
            <th>ID</th> <th>Name</th> <th>Email</th> <th>Username</th> <th>password</th> <th>contact no</th> <th>Edit</th> <th>Delete</th>
        </tr>

        <?php
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo 
                    "<tr>
                        <td>" . $row['id'] . "</td> 
                        <td>" . $row['name'] . "</td> 
                        <td>" . $row['email'] ."</td> 
                        <td>" . $row['username'] ."</td> 
                        <td>" . $row['password'] ."</td> 
                        <td>" . $row['contact_no'] ."</td>  
                        <td> <a target='_blank' href='edit.php?status=edit&&id=" . $row['id'] . "'>Edit</a> </td> 
                        <td> <a target='_blank' href='delete.php?status=delete&&id=" . $row['id'] . "'>Delete</a></td>
                    </tr>";
                }
            }
        ?>

    </table>
    <a href="logout.php"> Logout</a>
</body>
</html>