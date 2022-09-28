<?php
    if (isset($_POST['btn'])){
        extract($_POST);
        echo "<html><body>";
        echo "Please Check your provided info again <br>";
        echo "<table>";
        echo "<tr><td>Name:</td><td>".$name."</td></tr>";
        echo "<tr><td>SSC Roll:</td><td>".$sroll."</td></tr>";
        echo "<tr><td>HSC Roll:</td><td>".$hroll."</td></tr>";
        echo "<tr><td>Registration Number:</td><td>".$reg."</td></tr>";
        echo "<tr><td>SSC GPA:</td><td>".$sres."</td></tr>";
        echo "<tr><td>HSC GPA:</td><td>".$hres."</td></tr>";
        echo "<tr><td>Board:</td><td>".$board."</td></tr>";
        echo "<tr><td>Phone:</td><td>".$phone."</td></tr>";
        echo "<tr><td>Father's Name:</td><td>".$fname."</td></tr>";
        echo "<tr><td>Mother's Name:</td><td>".$mname."</td></tr>";
        echo "</table>";
        echo "</body></html>";
    }
?>