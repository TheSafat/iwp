<?php
    $conn = mysqli_connect('localhost', 'root', '', 'problem7db');
    
    if(isset($_GET['status'])){
        if($_GET['status'] = 'edit'){
            $id = $_GET['id'];
        }
    }

    $sql = "SELECT * FROM teachers WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $teacherInfo = mysqli_fetch_assoc($result);
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Problem-7</title>
</head>
<body>
    
    <h2>Previous Info:</h2>
    Name: <?php echo $teacherInfo['name'] ?> <br>
    Dept: <?php echo $teacherInfo['dept'] ?> <br>

    <h2>Insert new data:</h2>
    <form action="#" method="post">
        <table>
            <tr> <td>Name</td> <td> <input type="text" name="new_name" id=""></td></tr>
            <tr> <td>Dept</td> <td> <input type="text" name="new_dept" id=""></td></tr>
            <tr> <td></td> <td> <input type="submit" name="new_btn" id=""></td></tr>
        </table>
    </form>

    <?php
        if(isset($_POST['new_btn']))
        {
            $new_name = $_POST['new_name'];
            $new_dept = $_POST['new_dept'];
        
            $sql = "UPDATE teachers 
                SET name = '$new_name', dept = '$new_dept'
                WHERE id = $id";

            mysqli_query($conn, $sql);
        }

        mysqli_close($conn);
    ?>

</body>
</html>