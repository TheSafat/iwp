<?php
    $conn = mysqli_connect('localhost', 'root', '', 'practice4db');
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show</title>
</head>
<body>
    <table align=center border=1>
        <tr>
            <th>ID</th> <th>Name</th> <th>Email</th> <th>Image</th> <th>Edit</th> <th>Delete</th>
        </tr>

        <?php
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo 
                    "<tr>
                        <td>" . $row['id'] . "</td> 
                        <td>" . $row['name'] . "</td> 
                        <td>" . $row['email'] ."</td> 
                        <td> <img height='100px' src='upload/" . $row['image'] . "'></td> 
                        <td> <a target='_blank' href='edit.php?status=edit&&id=" . $row['id'] . "'>Edit</a> </td> 
                        <td> <a target='_blank' href='delete.php?status=delete&&id=" . $row['id'] . "'>Delete</a></td>
                    </tr>";
                }
            }
        ?>

    </table>
</body>
</html>