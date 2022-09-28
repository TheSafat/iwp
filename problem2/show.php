<?php
    $conn = mysqli_connect('localhost', 'root', '', 'problem2db');
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>problem-2, show.php</title>
</head>
<body>
    <table border=1 align="center">
        <tr><th>id</th><th>name</th><th>price</th><th>image</th></tr>
        <?php
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr><td>" 
                    . $row['id'] . "</td><td>" 
                    . $row['product_name'] . "</td><td>" 
                    . $row['product_price'] . "</td><td><img width='100px' src='upload/" 
                    . $row['product_img'] . "'</td></tr>";
                }
            }
        ?>
    </table>
</body>
</html>