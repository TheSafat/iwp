<?php
    $conn = mysqli_connect('localhost', 'root', '', 'problem7db');
    $sql = "SELECT * FROM teachers";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>problem-7</title>
</head>
<body>
    <table align="center" border=1>
        <tr> <th>ID</th> <th>Name</th> <th>Dept</th> <th></th></tr>

        <?php
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr> 
                    <th>" . $row['id'] . "</th> 
                    <th>" . $row['name'] . "</th> 
                    <th>" . $row['dept'] . "</th> 
                    <th><a href='edit.php?status=edit&&id=" . $row['id'] . "'> Edit </a></th>
                    </tr>";
                }
            }
        ?>

    </table>


</body>
</html>