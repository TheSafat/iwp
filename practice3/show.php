<?php
    $conn = mysqli_connect('localhost', 'root', '', 'problem1db');
    $sql = "Select * FROM student";
    $result = mysqli_query($conn, $sql);
?>

<html>
<body>
    <?php
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row['fname'] . "<br>";
            }
        }
    ?>
    
</body>
</html>