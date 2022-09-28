<?php
    $conn = mysqli_connect('localhost', 'root', '', 'problem12db');
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Problem-12</title>
</head>
<body>
    <table align='center' border=1>
        <tr> <th>ID</th> <th>name</th> <th>Roll</th> <th>Dept</th> <th></th></tr>

        <?php
            if(mysqli_num_rows($result))
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr> 
                    <td>" . $row['id'] . "</td> 
                    <td>" . $row['name'] . "</td> 
                    <td>" . $row['roll'] . "</td> 
                    <td>" . $row['dept'] . "</td> 
                    <td> <a target='_blank' href='delete.php?status=delete&&id=" . $row['id'] . "'> 
                    Delete </a> </td>
                    </tr>";
                }
            }
        ?>

    </table>
</body>
</html>