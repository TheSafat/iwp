<?php
    $conn = mysqli_connect('localhost', 'root', '', 'problem6db');
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table align='center' border='2'>
        <tr> <th>Roll</th> <th>Name</th> <th>Dept.</th> </tr>
        
        <?php
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr> <td>" 
                    . $row['roll'] . "</td> <td>" 
                    . $row['name'] . "</td> <td>" 
                    . $row['dept'] . "</td> </tr>";
                }
            }
        ?>

    </table>
</body>
</html>